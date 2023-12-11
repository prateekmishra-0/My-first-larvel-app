<?php

use Illuminate\Support\Facades\Route;
use App\Models\Song;

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

Route::get('/songs_static', function () {
  return view('songs_static');
});

  Route::get('/songs', function () {
    return view('songs', [ 'songs' => Song::all() ] );
});


