@extends('layouts.app')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="height: 400px; background: url('{{ $post->thumbnail->getUrl() }}'); background-size: 100% 400px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" style="padding-top: 120px;">
                <div class="brand">
                    <h2 style="color: white;">{{ $post->title }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section section-basic" style="padding-top: 30px">
    <div class="container">
        {!! $post->content !!}
        <div class="text-right">
            <small class="text-muted">{{ $post->author->fullname }} </small><br>
            <small class="text-muted"> Posted at: {{ $post->created_at }}</small>
        </div>
    </div>
</div>
@endsection
