<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tables=table::all();
        return view('tables')->with('tables',$tables);
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

        // $request->validate([
        //     'name' => 'required|max:255',
        //     'image' => 'required',
        //     'price' => 'required|numeric',
        //     'description' => 'required|max:1000',
        // ]);

        if($request->hasFile("image")){
            $file = $request->file("image");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("image/"),$imageName);

        $tables = new table([
            'name'=>$request->name,
            'image'=>$imageName,
            'price'=>$request->price,
            'description'=>$request->description,
        ]);

        $tables->save();
    }

        return redirect('tables');
    }

    /**
     * Display the specified resource.
     */
    public function show(Table $table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Table $table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Table $table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Table $table)
    {
        //
    }
}
