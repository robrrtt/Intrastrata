<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/about-us', function () {
    return Inertia::render('AboutUs');
})->middleware(['auth', 'verified'])->name('AboutUs');

Route::get('/connect-with-us', function () {
    return Inertia::render('ConnectwithUs');
})->middleware(['auth', 'verified'])->name('connect-with-us');

Route::get('/join-us', function () {
    return Inertia::render('JoinUs');
})->middleware(['auth', 'verified'])->name('join-us');

Route::get('/products', function () {
    return Inertia::render('Products');
})->middleware(['auth', 'verified'])->name('Products');

Route::get('/talk-to-us', function () {
    return Inertia::render('TalktoUs');
})->middleware(['auth', 'verified'])->name('TalktoUs');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
