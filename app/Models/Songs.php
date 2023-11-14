<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'release_year',
        'duration',
        'genre',
        'singer_name',
    ];
}
