<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingApiController extends Controller
{
    public function index()
    {
        return response()->json(Booking::all());
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

    $booking = Booking::create([
        'user_id' => 1,
        'customer_name' => $request->customer_name,
        'phone' => $request->phone,
        'laptop_brand' => $request->laptop_brand,
        'booking_date' => $request->booking_date,
        'booking_time' => $request->booking_time,
        'complaint' => $request->complaint,
        'status' => 'pending',
        'estimated_price' => null
    ]);

        return response()->json([
            'message' => 'Booking berhasil',
            'data' => $booking
        ]);
    }

    public function show(Booking $booking)
{
    return response()->json($booking);
}

public function update(Request $request, Booking $booking)
{
    $booking->update([
        'status' => $request->status,
        'estimated_price' => $request->estimated_price
    ]);

    return response()->json([
        'message' => 'Booking berhasil diupdate',
        'data' => $booking
    ]);
}

public function destroy(Booking $booking)
{
    $booking->delete();

    return response()->json([
        'message' => 'Booking berhasil dihapus'
    ]);
}
}