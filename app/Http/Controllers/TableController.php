<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tables = Table::all();
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
        // dd($request->all());

        if($request->hasFile("image")){
            $file = $request->file("image");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("cover/"),$imageName);

        $tables = new Table([
            'name'=>$request->name,
            'image'=>$imageName,
            'price'=>$request->price,
            'description'=>$request->description,
        ]);

        $tables->save();
    }

        return redirect('tables')->with('message','Table has been added');
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
    public function edit($id)
    {
        $tables=Table::findOrFail($id);
        return view('tablescrud.edittable')->with('tables',$tables);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tables = Table::findOrFail($id);
        if($request->hasFile("image")){
            if(File::exists("image/".$tables->image)){
                File::delete("image/".$tables->image);
            }
            $file=$request->file("image");
            $tables->image=time()."_".$file->getClientOriginalName();
            $file->move(\public_path("/cover"),$tables->image);
            $request['image']=$tables->cover;
        }

        $tables->update([
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
        ]);

        return redirect('tables');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tables = Table::findOrFail($id);
        $tables->delete();
        return redirect('tables');
    }
}
