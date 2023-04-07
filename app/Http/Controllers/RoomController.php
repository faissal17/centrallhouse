<?php

namespace App\Http\Controllers;

use App\Models\room;
use App\Models\image;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
            $file=$request->file("cover");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("cover/"),$imageName);

            $room =new room([
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

            if($request->hasFile("images")){
                $files=$request->file("images");
                foreach($files as $file){
                    $imageName=time().'_'.$file->getClientOriginalName();
                    $request['room_id']=$room->id;
                    $request['image']=$imageName;
                    $file->move(\public_path("/images"),$imageName);
                    image::create($request->all());
                }
            }

            return redirect("dashboard");
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
        return view('roomscrud.editroom',compact('rooms'));
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
            "cover" =>$imageName,
            "description" =>$request->description,
           ]);

           if($request->hasFile("images")){
               $files=$request->file("images");
               foreach($files as $file){
                   $imageName=time().'_'.$file->getClientOriginalName();
                   $request["room_id"]=$id;
                   $request["image"]=$imageName;
                   $file->move(\public_path("images"),$imageName);
                   Image::create($request->all());

               }
           }

           return redirect('dashboard');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
