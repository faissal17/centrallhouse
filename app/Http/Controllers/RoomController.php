<?php

namespace App\Http\Controllers;

use App\Models\room;
use App\Models\image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return 'mess';
        $rooms=room::all();
        return view('dashboard')->with('rooms',$rooms);
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
        if($request->hasFile("cover")){
            $file = $request->file("cover");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("cover/"),$imageName);

            $room = new room([
                "price" =>$request->price,
                "name" =>$request->name,
                "bed" =>$request->bed,
                "bath" =>$request->bath,
                "room" =>$request->room,
                "cover" =>$imageName,
                "description" =>$request->description,
            ]);

           $room->save();
        }

            return redirect("dashboard")->with('message','Room has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rooms=room::findOrFail($id);
        return view('roomscrud.editroom')->with('rooms',$rooms);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rooms = room::findOrFail($id);
        if($request->hasFile("cover")){
            if (File::exists("cover/".$rooms->cover)) {
                File::delete("cover/".$rooms->cover);
            }
            $file=$request->file("cover");
            $rooms->cover=time()."_".$file->getClientOriginalName();
            $file->move(\public_path("/cover"),$rooms->cover);
            $request['cover']=$rooms->cover;
        }

           $rooms->update([
            "price" =>$request->price,
            "name" =>$request->name,
            "bed" =>$request->bed,
            "bath" =>$request->bath,
            "room" =>$request->room,
            "description" =>$request->description,
           ]);

           return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rooms = room::findOrFail($id);

        if (File::exists("cover/".$rooms->cover)) {
            File::delete("cover/".$rooms->cover);
        }

         $rooms->delete();
         return redirect('dashboard');
    }
}
