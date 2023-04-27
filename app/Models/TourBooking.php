<?php

namespace App\Models;

use App\Models\Tour;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TourBooking extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'guests',
    ]

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function tour(){
        return $this->hasOne(Tour::class);
    }
}
