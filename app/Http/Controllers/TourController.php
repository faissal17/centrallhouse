<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


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
        if($request->hasFile("image")){
            $file = $request->file("image");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("cover/"),$imageName);

        $tours = [
            'name'=>$request->name,
            'image'=>$imageName,
            'price'=>$request->price,
            'description'=>$request->description,
        ];

        Tour::create($tours);
    }

        return redirect('tour');
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
    public function edit($id)
    {

        $tours = Tour::findOrFail($id);
        return view('tourcrud.editTour',compact('tours'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tours= Tour::find($id);
        if($request->hasFile('image')){
            if(File::exists("image/".$tours->image)){
                (File::delete("image/".$tours->image));
            }
            $file=$request->file("image");
            $tours->image=time()."_".$file->getClientOriginalName();
            $file->move(\public_path("/cover"),$tours->image);
            $request['image']=$tours->cover;
        }
            $tours->update([
              'price'=>$request->price,
              'name'=>$request->name,
              'description'=>$request->description,
            ]);

            return redirect('tour');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $id)
    {
        //
    }
}
