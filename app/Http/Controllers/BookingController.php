<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){
        return view('booking',[
            'bookings' => Booking::where('user_id',auth()->user()->id)->get()
        ]);
    }

    public function store(Request $request){
        Booking::create([
            'user_id' => auth()->user()->id,
            'booking_time' => strtotime("$request->date $request->time"),
            'content' => $request->content
        ]);
        return redirect()->back()->with(['class' => 'success', 'message' => 'Booking success!']);
    }
}
