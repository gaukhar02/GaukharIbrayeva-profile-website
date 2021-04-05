<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('home');
});


Route::get('/profile', [ProfileController::class, 'index']);
Route::post('/profile', [ProfileController::class, 'add'])->name('addprofile');

Route::get('/profile/{profile_id}', [ProfileController::class, 'showProfile']);

Route::get('/profiles', [ProfileController::class, 'showProfiles']);
