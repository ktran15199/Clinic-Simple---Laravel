@extends('layouts.app')

@section('content')
    @include('shared._header')
    <div class="container">
        <div class="row">
			<div class="col-md-12 grid-margin">
				@if(session('class'))
					<div class="alert alert-{{session('class')}}">
						<li>{{session('message')}}</li>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				@endif
			</div>
			<div class="col-md-4 grid-margin">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title mb-4">Booking clinic</h4>
                        <form class="form" action="{{ route('booking.store')}}" method="post">
							@csrf
							<div class="form-group">
								<label>Date</label>
								<input type="date" class="form-control currency" name="date" required="">
							</div>
							<div class="form-group">
								<label>Time</label>
								<input type="time" class="form-control currency" name="time" required="">
							</div>
							<div class="form-group">
								<label >Request</label>
								<input type="string" class="form-control" name="content" required="">
							</div>
							<div class="text-right">
								<button type="submit" class="btn btn-success">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="col-md-8 grid-margin">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title mb-4">History Order</h4>
						<table class="table table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Datetime</th>
									<th>Request</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
                                @foreach ($bookings as $booking)
                                <tr>
                                    <td>{{$booking->id}}</td>
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
                                </tr>
                                @endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
    </div>
@endsection
