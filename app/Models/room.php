<?php

namespace App\Models;

use App\Models\image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class room extends Model
{
    use HasFactory;
    protected $fillable = [
        'price',
        'name',
        'bed',
        'bath',
        'room',
        'cover',
        'description',
    ];

    public function images(){
        return $this->hasMany(image::class);
    }
}
