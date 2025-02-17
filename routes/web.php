<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\ContactController; //contactus 
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\InquiryController;


Route::get('/', function () {
    return Inertia::render('LandingPage/Home', [ 
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::get('/', function () {
    return Inertia::render('LandingPage/Home');
});


Route::get('/gl/about-us', function () {
    return Inertia::render('LandingPage/AboutUs');
}); 

Route::get('/gl/join-us', function () {
    return Inertia::render('LandingPage/JoinUs');
}); 

Route::get('/gl/Claims', function () {
    return Inertia::render('LandingPage/Claims');
}); 

Route::get('/gl/products', function () {
    return Inertia::render('LandingPage/Products');
}); 

Route::get('/gl/talk-to-us', function () {
    return Inertia::render('LandingPage/TalktoUs');
}); 
Route::post('/gl/contact', [ContactController::class, 'store']);


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//About Us Route
Route::get('/about-us/CompanyProfile', function () {
    return Inertia::render('AboutUs/CompanyProfile');
}); 
Route::get('/about-us/BranchandAgencies', function () {
    return Inertia::render('AboutUs/BranchandAgencies');
}); 
Route::get('/about-us/CorporateGovernance', function () {
    return Inertia::render('AboutUs/CorporateGovernance');
}); 
Route::get('/about-us/PartnersandAcreditation', function () {
    return Inertia::render('AboutUs/PartnersandAcreditaiton');
}); 

//Product Us Route
Route::get('/products/MotorCar', function () {
    return Inertia::render('Products/MotorCar');
}); 
Route::get('/products/Fire', function () {
    return Inertia::render('Products/Fire');
}); 

Route::get('/products/Bonds', function () {
    return Inertia::render('Products/Bonds');
}); 

Route::get('/products/MarineLines', function () {
    return Inertia::render('Products/Marine');
}); 

Route::get('/products/EngineeringLines', function () {
    return Inertia::render('Products/Engineering');
}); 

Route::get('/products/Casualty', function () {
    return Inertia::render('Products/Casualty');
}); 

Route::post('/inquiries', [InquiryController::class, 'store']); //email route

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

Route::post('/upload', [FileController::class, 'store']);
Route::get('/files', [FileController::class, 'index']);
Route::get('/download/{id}', [FileController::class, 'download']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
