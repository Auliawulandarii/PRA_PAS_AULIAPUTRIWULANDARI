<?php

namespace App\Http\Controllers;

use App\Models\Singers;
use Illuminate\Http\Request;

class SingersControllers extends Controller
{
    public function index()
    {
        return view('singers.all', [
            'title' => 'Singers',
            "singers" => Singers::all()
        ]);
    }

    public function show(Singers $singer)
    {
        return view('singers.detail', [
            'title' => 'Singer-Detail',
            'singer' => $singer
        ]);
    }
}
