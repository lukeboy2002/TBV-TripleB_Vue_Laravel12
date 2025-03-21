<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
// });
Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/blog', function () {
    return Inertia::render('Post');
})->name('blog');

Route::get('/team', function () {
    return Inertia::render('Team');
})->name('team');

Route::get('/album', function () {
    return Inertia::render('Album');
})->name('album');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
