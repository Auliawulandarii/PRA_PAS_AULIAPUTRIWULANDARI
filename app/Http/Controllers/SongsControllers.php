<?php

namespace App\Http\Controllers;

use App\Models\Songs;
use Illuminate\Http\Request;

class SongsControllers extends Controller
{
    public function index()
    {

        return view('songs.all', [
            'title' => 'Songs',
            "songs" => Songs::all()
        ]);
    }

    public function show(Songs $songs)
    {
        return view('Songs.detail', [
            'title' => 'Songs-Detail',
            'songs' => $songs
        ]);
    }
}
