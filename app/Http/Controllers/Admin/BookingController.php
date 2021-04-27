<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return view('admin.booking.index', [
            'bookings' => Booking::with('user')->paginate(50)
        ]);
    }

    public function confirm($id){
        Booking::find($id)->update(['status' => 1,'responser_id'=>auth()->user()->id]);
        return redirect()->back();
    }

    public function cancel($id){
        Booking::find($id)->update(['status' => 2,'responser_id'=>auth()->user()->id]);
        return redirect()->back();
    }
}
