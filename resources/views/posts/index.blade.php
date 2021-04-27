@extends('layouts.app')

@section('content')
<div class="section section-basic">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4 class="title text-center">Search</h4>
                @include ('posts/_search')
            </div>
            <div class="col-md-9">
                <h4 class="title">Latest post</h4>
                @include ('posts/_list')
            </div>
        </div>
    </div>
</div>
@endsection
