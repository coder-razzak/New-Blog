@extends('layouts.backend.app')
@section('title', 'Post')

@push('css')
    <!-- Multi Select Css -->
    <link href="{{ asset('assets/backend/plugins/multi-select/css/multi-select.css') }}" rel="stylesheet">
    <!-- Bootstrap Select Css -->
    <link href="{{ asset('assets/backend/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />

@endpush

@section('content')
    <!-- Exportable Table -->
<form method="POST" action="{{ route('admin.post.update',$post->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row clearfix">
        <div class="col-md-8">
            <div class="card">
                <div class="header">
                    <h2>
                        Edit Post
                    </h2>
                </div>
                <div class="body">
                    <label for="title">Post Title</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" value="{{ $post->title }}" id="title" class="form-control" placeholder="Enter post title" name="title">
                        </div>
                    </div>
                    
                    <label for="image">Post Image</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="file" value="{{ $post->image }}" id="image" class="form-control" name="image">
                        </div>
                    </div>

                    <input type="checkbox" id="status" class="filled-in" name="status" value="1" {{ $post->status == true ? 'checked' : '' }}>
                    <label for="status">Status</label>
                    
                </div>
            </div>   
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="header">
                    <h2>Tags & Categories</h2>
                </div>
                <div class="body">
                    <label for="category">Categories</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select class="form-control show-tick" data-live-search="true" name="categories[]" id="category" multiple>
                                @foreach ($categories as $value)
                                    <option 
                                        value="{{ $value->id }}" 
                                        @foreach($post->categories as $postCategory)
                                            {{ $postCategory->id == $value->id ? 'selected' : '' }}
                                        @endforeach>
                                        
                                        {{ $value->name }}
                                   
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <label for="tag">Tags</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select class="form-control show-tick" data-live-search="true" name="tags[]" id="tag" multiple>
                                @foreach ($tags as $value)
                                    <option 
                                        value="{{ $value->id }}"
                                        @foreach($post->tags as $postTag)
                                            {{ $postTag->id == $value->id ? 'selected' : '' }}
                                        @endforeach>
                                        
                                        {{ $value->name }}
                                    
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg waves-effect">SAVE</button>
                    <a href="{{ route('admin.post.index') }}" class="btn btn-lg btn-warning waves-effect">BACK</a>

                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Body</h2>
                </div>
                <div class="body">
                    <textarea id="tinymce" name="body">{{ $post->body }}</textarea>
                </div>
            </div>
        </div>
    </div>

</form>
    <!-- #END# Exportable Table -->
@endsection

@push('js')
    <!-- Multi Select Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/multi-select/js/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('assets/backend/js/pages/forms/advanced-form-elements.js') }}"></script>
    
    <script>
        $(function () {

            //TinyMCE
            tinymce.init({
                selector: "textarea#tinymce",
                theme: "modern",
                height: 300,
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools'
                ],
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: 'print preview media | forecolor backcolor emoticons',
                image_advtab: true
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{ asset("assets/backend/plugins/tinymce") }}';
        });
    </script>
@endpush