@extends('layouts.backend.app')
@section('title', 'Tag')

@push('css')

@endpush

@section('content')
    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Edit Tag
                    </h2>
                </div>
                <div class="body">
                    <form method="POST" action="{{ route('admin.tag.update',$tag->id) }}">
                        @csrf
                        @method('PUT')

                        <label for="name">Tag Name</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input value="{{ $tag->name }}" type="text" id="name" class="form-control" placeholder="Enter tag name" name="name">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg waves-effect">UPDATE</button>
                        <a href="{{ route('admin.tag.index') }}" class="btn btn-lg btn-warning waves-effect">BACK</a>
                    </form>
                </div>
            </div>   
        </div>
    </div>
    <!-- #END# Exportable Table -->
@endsection

@push('js')
        
@endpush