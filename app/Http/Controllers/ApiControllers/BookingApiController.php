<?php

namespace App\Http\Controllers\ApiControllers;

use App\Booking;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingApiController extends Controller
{
    /**
     * Display a listing of all booking.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Booking::paginate(2), 200);
    }

    /**
     * Store a newly created booking in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bookings = Booking::create($request->all());
        return response()->json($bookings, 201);
    }

    /**
     * Display the specified booking.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Booking::find($id), 200);
    }


    /**
     * Update the specified booking in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        $booking->update($request->all());
        return response()->json($booking, 200);
    }

    /**
     * Remove the specified booking from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Booking::destroy($id);
        return response()->json(204);
    }
}