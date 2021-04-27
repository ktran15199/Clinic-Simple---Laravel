@extends('layouts.app')

@section('content')
    @include('shared._header')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h2>Medical News</h2>
                <hr>
                <p></p>
                <p></p>
            </div>
        </div>

        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                    <img class="card-img-top" src="{{ $post->thumbnail->getUrl() }}" alt="" height="200px" width="300px">
                    <div class="card-body">
                        <h4 class="card-title">{{ $post->title }}</h4>
                        <p class="card-text">{{ substr(preg_replace ('/<[^>]*>/', ' ', $post->content), 0, 200) }}...</p>
                        <div class="text-right">
                            <a href="{{ route('post.show',$post->id) }}" class="btn btn-warning btn-sm">Read Now!</a>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
