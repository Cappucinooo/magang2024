<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProvinsiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello kiwayway';  
})->name('Nama');

// Route::get('/dashboard', function () {
//     return view('dashboard',['nama' => 'Rizky'] );
// })->name('dashdoard');



Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/provinsi', function () {
    return view('provinsi');
})->name('provinsi');


// Route::get('/pulau/{id}', function ($id) {
//     return 'Ini adalah ID Pulau ' . $id;
// })->name('Pulau');

Route::get('/dashboard',[DashboardController::class, 'index'] )->name('dashboard');
Route::get('/provinsi', [ProvinsiController::class, 'index'])->name('provinsi');
// Route::resource('provinsi',ProvinsiController::class);