<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singers extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'genre',
        'debut_year',
        'Bio',
        'date_Birth',
        'Place_Birth',
    ];
}
