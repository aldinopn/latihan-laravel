<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('index',[
        "title" => "Home",
        "Judul" => "Halaman Home"
      ]);
});

Route::get('/tables', function () {
    return view('tables',[
        "title" => "Tables",
        "Judul" => "Tabel"
      ]);
});


Route::get('/data-tables', function () {
    return view('data-tables',[
        "title" => "Data Tables",
        "Judul" => "Halaman Data Tabel"
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard',[
        "title" => "Dashboard",
        "Judul" => "Halaman Dashboard"
    ]);
});

Route::get('/contact', function () {
    return view('contact',[
        "title" => "Contact",
        "Judul" => "Halaman Contact"
    ]);
});

Route::get('/profile', function () {
    $profile = DB::table('profile')->get();
    return view('profile',compact("profile")
    );
});

