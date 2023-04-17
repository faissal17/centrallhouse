<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::all();
        return view('tour')->with('tours',$tours);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tour $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tour $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $id)
    {
        //
    }
}
