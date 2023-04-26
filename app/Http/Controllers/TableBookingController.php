<?php

namespace App\Http\Controllers;

use App\Models\Table;
use App\Models\TableBooking;
use Illuminate\Http\Request;

class TableBookingController extends Controller
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

        $tables = Table::find($request->tables_id);


        //dd($request->request);

        $Tablebooking = [
            'user_id'=>auth()->user()->id,
            'table_id'=>$request->tables_id,
            'fullname'=>$request->fullname,
            'Adult'=>$request->Adult,
            'kids'=>$request->kids,
            'specialrequest'=>$request->specialrequest,
            'Email'=>$request->Email,

        ];

        $tables->update([
            'availible' => 0
        ]);

        TableBooking::create($Tablebooking);

        return redirect('tables');
    }

    /**
     * Display the specified resource.
     */
    public function show(TableBooking $tableBooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TableBooking $tableBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TableBooking $tableBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TableBooking $tableBooking)
    {
        //
    }
}
