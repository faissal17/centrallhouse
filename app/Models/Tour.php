<?php

namespace App\Models;

use App\Models\Tour;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'image',
        'name',
        'description',
        'availible',
    ];
}
