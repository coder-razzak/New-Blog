<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use App\Post;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Notifications\NewAdminPostNotification;
use App\Subscriber;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();
        $tags = Tag::latest()->get();
        return view('admin.post.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'         => 'required|min:3',
            'image'         => 'image',
            'categories'    => 'required',
            'tags'          => 'required',
            'body'          => 'required'
        ]);

        $image = $request->file('image');
        $slug  = Str::slug($request->title);

        if ($image)
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            // check directory exists or not
            if(!Storage::disk('public')->exists('post'))
            {
                Storage::disk('public')->makeDirectory('post');
            }
            $postImage = Image::make($image)->resize(1600, 1066)->save($image);
            Storage::disk('public')->put('post/'.$imagename,$postImage);
        } else {
            $imagename = 'default.png';
        }

        $post = new Post();
        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->slug = $slug;
        $post->image = $imagename;
        $post->body = $request->body;
        
        $status = $request->status;
        if(isset($status))
        {
            $post->status = true;
        } else {
            $post->status = false;
        }

        $post->is_approved = true;
        $post->save();
        
        $post->categories()->attach($request->categories);
        $post->tags()->attach($request->tags);

        $subscribers = Subscriber::all();
        foreach($subscribers as $subscriber)
        {
            Notification::route('mail', $subscriber->email)->notify(new NewAdminPostNotification($post));
        }

        Toastr::success("Post Created Successfully !!!", "Success");
        return redirect()->route('admin.post.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::latest()->get();
        $tags = Tag::latest()->get();

        return view('admin.post.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'title'         => 'required|min:3',
            'image'         => 'image',
            'categories'    => 'required',
            'tags'          => 'required',
            'body'          => 'required'
        ]);

        $slug  = Str::slug($request->title);
        $image = $request->file('image');

        if ($image)
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            // check directory exists or not
            if(!Storage::disk('public')->exists('post'))
            {
                Storage::disk('public')->makeDirectory('post');
            }
            // delete old image
            if(Storage::disk('public')->exists('post/'.$post->image))
            {
                Storage::disk('public')->delete('post/'.$post->image);
            }

            $postImage = Image::make($image)->resize(1600, 1066)->save($image);
            Storage::disk('public')->put('post/'.$imagename,$postImage);
        } else {
            $imagename = $post->image;
        }

        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->slug = $slug;
        $post->image = $imagename;
        $post->body = $request->body;
        
        $status = $request->status;
        if(isset($status))
        {
            $post->status = true;
        } else {
            $post->status = false;
        }

        $post->is_approved = true;
        $post->save();
        
        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);

        Toastr::success("Post Updated Successfully !!!", "Success");
        return redirect()->route('admin.post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {        
        if(Storage::disk('public')->exists('post/'.$post->image))
        {
            Storage::disk('public')->delete('post/'.$post->image);
        }
        $post->categories()->detach();
        $post->tags()->detach();
        $post->delete();

        Toastr::success('Post Deleted Successfully !!!', 'Success');
        return back();
    }
    
    public function isApproved($id)
    {
       $post = Post::find($id);
       $post->is_approved = true;
       $post->save();
       
       Toastr::success("Post Approved Successfully !!!", "Success");
       return redirect()->route('admin.post.index');
    }
}
