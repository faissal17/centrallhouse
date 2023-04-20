<?php

namespace App\Models;

use App\Models\room;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class booking extends Model
{
    use HasFactory;
    protected $fillable =([
        'user_id',
        'room_id',
        'arrive',
        'leave',
        'name',
        'phone',
        'email',
    ]);
    public function user(){
        return $this->belongTo(User::class);
    }
    public function room(){
        return $this->hasOne(room::class);
    }
}
