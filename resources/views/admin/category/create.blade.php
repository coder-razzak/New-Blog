@extends('layouts.backend.app')
@section('title', 'Category')

@push('css')

@endpush

@section('content')
    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Add New Category
                    </h2>
                </div>
                <div class="body">
                    <form method="POST" action="{{ route('admin.category.store') }}" enctype="multipart/form-data">
                        @csrf
                        <label for="name">Category Name</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="name" class="form-control" placeholder="Enter category name" name="name">
                            </div>
                        </div>
                        <label for="image">Category Image</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg waves-effect">SAVE</button>
                        <a href="{{ route('admin.category.index') }}" class="btn btn-lg btn-warning waves-effect">BACK</a>
                    </form>
                </div>
            </div>   
        </div>
    </div>
    <!-- #END# Exportable Table -->
@endsection

@push('js')
        
@endpush