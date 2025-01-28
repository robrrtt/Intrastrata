<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
*/

Route::get('/', function () {
    return Inertia::render('LandingPage/AboutUs');
});

Route::get('/about-us', function () {
    return Inertia::render('LandingPage/AboutUs');
}); 

Route::get('/join-us', function () {
    return Inertia::render('LandingPage/JoinUs');
}); 

Route::get('/connect-with-us', function () {
    return Inertia::render('LandingPage/ConnectwithUs');
}); 

Route::get('/products', function () {
    return Inertia::render('LandingPage/Products');
}); 
Route::get('/talk-to-us', function () {
    return Inertia::render('LandingPage/TalktoUs');
}); 

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*soon to be admin
Route::get('/about-us', function () {
    return Inertia::render('Admin/AboutUs');
})->middleware(['auth', 'verified'])->name('AboutUs');

Route::get('/connect-with-us', function () {
    return Inertia::render('Admin/ConnectwithUs');
})->middleware(['auth', 'verified'])->name('connect-with-us');

Route::get('/join-us', function () {
    return Inertia::render('Admin/JoinUs');
})->middleware(['auth', 'verified'])->name('join-us');

Route::get('/products', function () {
    return Inertia::render('Admin/Products');
})->middleware(['auth', 'verified'])->name('Products');

Route::get('/talk-to-us', function () {
    return Inertia::render('Admin/TalktoUs');
})->middleware(['auth', 'verified'])->name('TalktoUs');
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
