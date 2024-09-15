<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Laravel\SerializableClosure\Support\ClosureScope;

Route::get('/', function () {
    return view('home', [
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "Baiq Ega Aulia",
        "email" => "xgaxxiq@gmail.com",
        "image" => "baiq.jpg"
    ]);
});

// Closures

// function () {
//     return view('about', [
//         "tittle" => "About",
//         "name" => "Baiq Ega Aulia",
//         "email" => "xgaxxiq@gmail.com",
//         "image" => "baiq.jpg"
//     ]);
// });

Route::get('/post', [PostController::class, 'index']);