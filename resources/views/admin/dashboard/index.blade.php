@extends('admin.layouts.app')

@section('title','Dashboard admin')

@section('content')
<div class="row">
    @if (auth()->user()->role == 1 || auth()->user()->role == 2)
    <div class="col-xl-4 col-sm-6 mb-6">
        @include('admin/dashboard/_posts')
    </div>
    @endif
    @if (auth()->user()->role == 1)
    <div class="col-xl-4 col-sm-6 mb-6">
        @include('admin/dashboard/_users')
    </div>
    @endif
    @if (auth()->user()->role == 1 || auth()->user()->role == 3)
    <div class="col-xl-4 col-sm-6 mb-6">
        @include('admin/dashboard/_bookings')
    </div>
    @endif
</div>
@endsection
