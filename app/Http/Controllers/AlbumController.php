<?php

namespace App\Http\Controllers;
use App\Models\Album;


use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        return view('album.all', [
            'title' => 'Album',
            "Album" => Album::all()
        ]);
    }

    public function show(Album $Album)
    {
        return view('Album.detail', [
            'title' => 'Album-Detail',
            'Album' => $Album
        ]);
    }
}
