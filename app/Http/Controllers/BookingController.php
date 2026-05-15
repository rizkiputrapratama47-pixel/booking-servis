<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
   public function index()
{
    if (auth()->user()->role == 'admin') {
        $bookings = Booking::all();
    } else {
        $bookings = Booking::where('user_id', auth()->id())->get();
    }

    return view('bookings.index', compact('bookings'));
}

    public function create()
    {
        return view('bookings.create');
    }

    public function store(Request $request)
{
    $request->validate([
    'customer_name' => 'required',
    'phone' => 'required',
    'laptop_brand' => 'required',
    'booking_date' => 'required',
    'booking_time' => 'required',
    'complaint' => 'required'
]);

    $exists = Booking::where('booking_date', $request->booking_date)
        ->where('booking_time', $request->booking_time)
        ->exists();

    if ($exists) {
        return back()->with('error', 'Jadwal bentrok');
    }

    Booking::create([
    'user_id' => auth()->id(),
    'customer_name' => $request->customer_name,
    'phone' => $request->phone,
    'laptop_brand' => $request->laptop_brand,
    'booking_date' => $request->booking_date,
    'booking_time' => $request->booking_time,
    'complaint' => $request->complaint,
    'status' => 'pending',
    'estimated_price' => null
]);

    return redirect('/bookings')
        ->with('success', 'Booking berhasil dibuat');
}

public function update(Request $request, Booking $booking)
{
    $booking->update([
        'status' => $request->status,
        'estimated_price' => $request->estimated_price
    ]);

    return redirect('/bookings');
}
}