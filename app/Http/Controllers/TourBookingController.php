<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\TourBooking;
use Illuminate\Http\Request;

class TourBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
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
        $tour = Tour::find($request->tours_id);
        // dd($request->all());

        $toursBooking = [
            'user_id'=>auth()->user()->id,
            'tour_id'=>$request->tours_id,
            'fullname'=>$request->fullname,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'guests'=>$request->guests,
        ];

         $tour->update([
            'availible' => 0
         ]);

       TourBooking::create($toursBooking);

        return redirect('tour')->with('message','tour has been reserved');
    }

    /**
     * Display the specified resource.
     */
    public function show(TourBooking $tourBooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TourBooking $tourBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TourBooking $tourBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TourBooking $tourBooking)
    {
        //
    }
}
