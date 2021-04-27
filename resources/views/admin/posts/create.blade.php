@extends('admin.layouts.app')

@section('custom-css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.23.0/ui/trumbowyg.min.css" integrity="sha512-iw/TO6rC/bRmSOiXlanoUCVdNrnJBCOufp2s3vhTPyP1Z0CtTSBNbEd5wIo8VJanpONGJSyPOZ5ZRjZ/ojmc7g==" crossorigin="anonymous" />
@endsection

@section('content')
    <h1>@lang('Create post')</h1>
    <form method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" required="" name="title" type="text" id="title">
            @error('title')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="thumbnail">Thumbnail Image</label>
            <input type="file" name="thumbnail" class="form-control">
            @error('thumbnail')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control form-control trumbowyg-form" id="content" name="content"></textarea>
            @error('content')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Back</a>
        <input class="btn btn-primary" type="submit" value="Create">
    </form>
@endsection

@section('custom-js')
<script src="{{ mix('/js/admin.js') }}"></script>
@endsection
