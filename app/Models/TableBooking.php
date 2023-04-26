<?php

namespace App\Models;

use App\Models\User;
use App\Models\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TableBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'table_id',
        'fullname',
        'Email',
        'Adult',
        'kids',
        'specialrequest',
    ];

    public function user(){
        return $this->belongTo(User::class);
    }
    public function table(){
        return $this->hasOne(Table::class);
    }
}
