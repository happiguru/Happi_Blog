@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Edit blog</h1>
        </div>
        <div class="col-md-12">
            <form action="{{ route('blogs.update', $blog->id) }}" method="post">
                {{ method_field('patch') }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="" class="form-control" value="{{ $blog->title }}">
                </div>
                <div class="form-group">
                    <label for="body">Title</label>
                    <textarea name="body" id="" class="form-control">{{ $blog->body }}</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-sm btn-primary" type="submit">Update</button>
                </div>
                {{ csrf_field() }}
            </form>
        </div>
    </div>

@endsection