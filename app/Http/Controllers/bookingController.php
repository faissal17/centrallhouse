<?php

namespace App\Http\Controllers;

use App\Models\room;
use App\Models\booking;
use Illuminate\Http\Request;

class bookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $room=room::find($request->room_id);

        $validatedData = $request->validate([
            'arrive' => 'required|date|after_or_equal:today',
            'leave' => 'required|date|after:arrive',
        ]);

        // dd($request->all());

        $bookings = [
            'user_id'=>auth()->user()->id,
            'room_id'=>$request->room_id,
            'arrive'=>$request->arrive,
            'leave'=>$request->leave,
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
        ];

        $room->update([
            'availible' => 0
        ]);


        booking::create($bookings);

        return redirect("dashboard")->with('message','Room has been reserved');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)

    {
        // return 'messi';
        $room=room::find($id);
        $room_id = $id;
        return view('booking' ,compact('room', 'room_id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(booking $booking)
    {
        //
    }


}
