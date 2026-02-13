<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



//ROUTE SEMENTARA
Route::view('/panduan', 'panduan')->name('panduan');
Route::view('/profil', 'profil')->name('profil');
Route::view('/belitiket', 'belitiket')->name('belitiket');
Route::view('/tiket', 'tiket')->name('tiket');

require __DIR__.'/auth.php';
