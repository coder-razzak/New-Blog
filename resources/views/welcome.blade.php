@extends('layouts.frontend.app')

@section('content')
@include('layouts.frontend.partials.slider')
<section class="blog-area section">
    <div class="container">
<div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="card h-100">
            <div class="single-post post-style-1">

                <div class="blog-image"><img src="{{ Storage::disk('public')->url('post/'.$posts[1]->image) }}" alt="{{ $posts[1]->title }}"></div>

                <a class="avatar" href="#"><img src="{{ Storage::disk('public')->url('user/'.$posts[1]->user->image) }}" alt="{{ $posts[1]->user->name }}"></a>

                <div class="blog-info">

                    <h4 class="title"><a href="#"><b>{{ $posts[1]->title }}</b></a></h4>

                    <ul class="post-footer">
                        <li><a href="#"><i class="ion-heart"></i>57</a></li>
                        <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                        <li><a href="#"><i class="ion-eye"></i>{{ $posts[1]->view_count }}</a></li>
                    </ul>

                </div><!-- blog-info -->
            </div><!-- single-post -->
        </div><!-- card -->
    </div><!-- col-lg-4 col-md-6 -->

    <div class="col-lg-4 col-md-6">
        <div class="card h-100">
            <div class="single-post post-style-1">

                <div class="blog-image"><img src="{{ Storage::disk('public')->url('post/'.$posts[2]->image) }}" alt="{{ Storage::disk('public')->url('post/'.$posts[2]->title) }}"></div>

                <a class="avatar" href="#"><img src="{{ Storage::disk('public')->url('user/'.$posts[2]->user->image) }}" alt="{{ $posts[2]->user->name }}"></a>

                <div class="blog-info">
                    <h4 class="title"><a href="#"><b>{{ $posts[2]->title }}</b></a></h4>

                    <ul class="post-footer">
                        <li><a href="#"><i class="ion-heart"></i>57</a></li>
                        <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                        <li><a href="#"><i class="ion-eye"></i>{{ $posts[2]->view_count }}</a></li>
                    </ul>
                </div><!-- blog-info -->

            </div><!-- single-post -->

        </div><!-- card -->
    </div><!-- col-lg-4 col-md-6 -->

    <div class="col-lg-4 col-md-6">
        <div class="card h-100">
            <div class="single-post post-style-1">

                <div class="blog-image"><img src="{{ Storage::disk('public')->url('post/'.$posts[3]->image) }}" alt="{{ Storage::disk('public')->url('post/'.$posts[3]->title) }}"></div>

                <a class="avatar" href="#"><img src="{{ Storage::disk('public')->url('user/'.$posts[3]->user->image) }}" alt="{{ $posts[3]->user->name }}"></a>

                <h4 class="title"><a href="#"><b>{{ $posts[3]->title }}</b></a></h4>

                <ul class="post-footer">
                    <li><a href="#"><i class="ion-heart"></i>57</a></li>
                    <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                    <li><a href="#"><i class="ion-eye"></i>{{ $posts[3]->view_count }}</a></li>
                </ul>

            </div><!-- single-post -->
        </div><!-- card -->
    </div><!-- col-lg-4 col-md-6 -->

    <div class="col-lg-8 col-md-12">
        <div class="card h-100">
            <div class="single-post post-style-1">

                <div class="blog-image"><img src="{{ Storage::disk('public')->url('post/'.$posts[4]->image) }}" alt="{{ $posts[4]->title }}"></div>

                <a class="avatar" href="#"><img src="{{ Storage::disk('public')->url('user/'.$posts[4]->user->image) }}" alt="{{ $posts[4]->user->name }}"></a>

                <h4 class="title"><a href="#"><b>{{ $posts[4]->title }}</b></a></h4>

                <ul class="post-footer">
                    <li><a href="#"><i class="ion-heart"></i>57</a></li>
                    <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                    <li><a href="#"><i class="ion-eye"></i>{{ $posts[4]->view_count }}</a></li>
                </ul>

            </div><!-- single-post -->
        </div><!-- card -->
    </div><!-- col-lg-8 col-md-12 -->

    <div class="col-lg-4 col-md-6">
        <div class="card h-100">
            <div class="single-post post-style-1">

                <div class="blog-image"><img src="{{ Storage::disk('public')->url('post/'.$posts[5]->image) }}" alt="{{ $posts[5]->title }}"></div>

                <a class="avatar" href="#"><img src="{{ Storage::disk('public')->url('user/'.$posts[5]->user->image) }}" alt="{{ $posts[5]->user->name }}"></a>

                <h4 class="title"><a href="#"><b>{{ $posts[5]->title }}</b></a></h4>

                <ul class="post-footer">
                    <li><a href="#"><i class="ion-heart"></i>57</a></li>
                    <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                    <li><a href="#"><i class="ion-eye"></i>{{ $posts[5]->view_count }}</a></li>
                </ul>

            </div><!-- single-post -->
        </div><!-- card -->
    </div><!-- col-lg-4 col-md-6 -->

    <div class="col-lg-4 col-md-6">
        <div class="card h-100">
            <div class="single-post post-style-1">

                <div class="blog-image"><img src="{{ Storage::disk('public')->url('post/'.$posts[6]->image) }}" alt="{{ $posts[6]->title }}"></div>

                <a class="avatar" href="#"><img src="{{ Storage::disk('public')->url('user/'.$posts[6]->user->image) }}" alt="{{ $posts[6]->user->name }}"></a>

                <h4 class="title"><a href="#"><b>{{ $posts[6]->title }}</b></a></h4>

                <ul class="post-footer">
                    <li><a href="#"><i class="ion-heart"></i>67</a></li>
                    <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                    <li><a href="#"><i class="ion-eye"></i>{{ $posts[6]->view_count }}</a></li>
                </ul>

            </div><!-- single-post -->
        </div><!-- card -->
    </div><!-- col-lg-4 col-md-6 -->

    <div class="col-lg-4 col-md-6">
        <div class="card h-100">
            <div class="single-post post-style-1">

                <div class="blog-image"><img src="{{ Storage::disk('public')->url('post/'.$posts[7]->image) }}" alt="{{ $posts[7]->title }}"></div>

                <a class="avatar" href="#"><img src="{{ Storage::disk('public')->url('user/'.$posts[7]->user->image) }}" alt="{{ $posts[7]->user->name }}"></a>

                <h4 class="title"><a href="#"><b>{{ $posts[7]->title }}</b></a></h4>

                <ul class="post-footer">
                    <li><a href="#"><i class="ion-heart"></i>77</a></li>
                    <li><a href="#"><i class="ion-chatbubble"></i>7</a></li>
                    <li><a href="#"><i class="ion-eye"></i>{{ $posts[7]->view_count }}</a></li>
                </ul>

            </div><!-- single-post -->
        </div><!-- card -->
    </div><!-- col-lg-4 col-md-6 -->

    <div class="col-lg-4 col-md-6">
        <div class="card h-100">
            <div class="single-post post-style-1">

                <div class="blog-image"><img src="{{ Storage::disk('public')->url('post/'.$posts[8]->image) }}" alt="{{ $posts[8]->title }}"></div>

                <a class="avatar" href="#"><img src="{{ Storage::disk('public')->url('user/'.$posts[8]->user->image) }}" alt="{{ $posts[8]->user->name }}"></a>

                <h4 class="title"><a href="#"><b>{{ $posts[8]->title }}</b></a></h4>

                <ul class="post-footer">
                    <li><a href="#"><i class="ion-heart"></i>88</a></li>
                    <li><a href="#"><i class="ion-chatbubble"></i>8</a></li>
                    <li><a href="#"><i class="ion-eye"></i>{{ $posts[8]->view_count }}</a></li>
                </ul>

            </div><!-- single-post -->
        </div><!-- card -->
    </div><!-- col-lg-4 col-md-6 -->

    <div class="col-lg-4 col-md-6">
        <div class="card h-100">
            <div class="single-post post-style-1">

                <div class="blog-image"><img src="{{ Storage::disk('public')->url('post/'.$posts[9]->image) }}" alt="{{ $posts[9]->title }}"></div>

                <a class="avatar" href="#"><img src="{{ Storage::disk('public')->url('user/'.$posts[9]->user->image) }}" alt="{{ $posts[9]->user->name }}"></a>

                <h4 class="title"><a href="#"><b>{{ $posts[9]->title }}</b></a></h4>

                <ul class="post-footer">
                    <li><a href="#"><i class="ion-heart"></i>99</a></li>
                    <li><a href="#"><i class="ion-chatbubble"></i>9</a></li>
                    <li><a href="#"><i class="ion-eye"></i>{{ $posts[9]->view_count }}</a></li>
                </ul>

            </div><!-- single-post -->
        </div><!-- card -->
    </div><!-- col-lg-4 col-md-6 -->

    <div class="col-lg-8 col-md-12">
        <div class="card h-100">
            <div class="single-post post-style-1">

                <div class="blog-image"><img src="{{ Storage::disk('public')->url('post/'.$posts[10]->image) }}" alt="{{ $posts[10]->title }}"></div>

                <a class="avatar" href="#"><img src="{{ Storage::disk('public')->url('user/'.$posts[10]->user->image) }}" alt="{{ $posts[10]->user->name }}"></a>

                <h4 class="title"><a href="#"><b>{{ $posts[10]->title }}</b></a></h4>

                <ul class="post-footer">
                    <li><a href="#"><i class="ion-heart"></i>1010</a></li>
                    <li><a href="#"><i class="ion-chatbubble"></i>10</a></li>
                    <li><a href="#"><i class="ion-eye"></i>{{ $posts[10]->view_count }}</a></li>
                </ul>

            </div><!-- single-post -->
        </div><!-- card -->
    </div><!-- col-lg-8 col-md-12 -->

</div><!-- row -->

</div><!-- container -->
</section><!-- section -->


@endsection