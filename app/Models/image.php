<?php

namespace App\Models;

use App\Models\room;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class image extends Model
{
    use HasFactory;
    protected $fillable=[
        'image',
        'room_id',
    ];

    public function rooms(){
        return $this->belongsTo(room::class);
    }
}
