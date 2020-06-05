@extends('layouts.backend.app')
@section('title', 'Post')

@push('css')

@endpush

@section('content')
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="alert alert-info">
                <i class="material-icons mr-15">content_copy</i> <strong>Posts</strong>
            </div>
        </div>
        <div class="col-md-12">
            <a href="{{ route('admin.tag.index') }}" class="btn btn-lg btn-warning waves-effect m-b-20 pull-left">BACK</a>

            @if($post->is_approved == true)
                <button class="btn m-b-20 btn-primary waves-effect pull-right btn-lg" disabled>Approved</button>
            @else
                <a href="{{ route('admin.post.is_approved',$post->id) }}" class="btn m-b-20 btn-primary waves-effect pull-right btn-lg">Approve</a>
            @endif
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-8">
            <div class="card">
                <div class="header">
                    <h2>
                        {{ $post->title }}
                    </h2>
                    <div>
                        <span>
                            <strong>Posted By:</strong> {{ $post->user->name }} 
                            <strong>On: </strong> {{ $post->updated_at->diffForHumans() }} 
                        </span>
                    </div>
                </div>
                <div class="body">
                    {!! $post->body !!}                    
                </div>
            </div>   
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="header bg-cyan">
                    <h2>
                        Categories
                    </h2>
                </div>
                <div class="body">
                    @foreach($post->categories as $value)
                        <span class="label label-info">{{ $value->name }}</span>
                    @endforeach
                </div>
            </div>
            <div class="card">
                <div class="header bg-green">
                    <h2>Tags</h2>
                </div>
                <div class="body">
                    @foreach($post->tags as $value)
                        <span class="label label-success">{{ $value->name }}</span>
                    @endforeach
                </div>
            </div>

            <div class="card">
                <div class="header bg-indigo">
                    <h2>Featured Image</h2>
                </div>
                <div class="body">
                    <div class="thumbnail">
                        <img src="{{ Storage::disk('public')->url('post/'.$post->image) }}" alt="{{ $post->title }}">
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('js')

@endpush