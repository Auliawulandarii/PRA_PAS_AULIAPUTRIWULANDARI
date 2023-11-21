<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SingersControllers;
use App\Http\Controllers\SongsControllers;
use App\Http\Controllers\AlbumController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/singers/all', [SingersControllers:: class, 'index']);
Route::get('/singers/detail/{singer}', [SingersControllers::class, 'show']);

Route::get('/songs/all', [SongsControllers:: class, 'index']);
Route::get('/songs/detail/{songs}', [SongsControllers::class, 'show']);

Route::get('/album/all', [AlbumController:: class, 'index']);
Route::get('/album/detail/{album}', [AlbumController::class, 'show']);

