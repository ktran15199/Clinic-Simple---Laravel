@extends('admin.layouts.app')

@section('content')
<div class="section section-basic">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="title">Bookings List</h4>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Datetime</th>
                            <th>Request</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                        <tr>
                            <td>{{$booking->id}}</td>
                            <td>{{$booking->user->name}}</td>
                            <td>{{$booking->booking_time}}</td>
                            <td>{{$booking->content}}</td>
                            <td>@if ($booking->status == 0)
                                Waiting
                                @elseif($booking->status == 2)
                                Cancel
                                @else
                                Confirm
                                @endif
                            </td>
                            <td>@if ($booking->status == 0)
                                <a href="{{ route('admin.booking.confirm',$booking->id) }}"><button class="btn btn-success btn-sm">Confirm</button></a>
                                <a href="{{ route('admin.booking.cancel',$booking->id) }}"><button class="btn btn-warning btn-sm">Cancel</button></a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="d-flex justify-content-center">
                    {{ $bookings->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
