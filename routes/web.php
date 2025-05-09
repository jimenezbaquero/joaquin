<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\LocalityController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProvinceController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'canLogin' => false,
        'canRegister' => false,
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'provinces' => ProvinceController::getProvinces(),
    ]);
});

Route::get('/localities/{province}', [LocalityController::class,'getLocalities'])->name('getLocalities');
Route::get('/images/{locality}', [ImageController::class,'getImages'])->name('getImages');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware([
    'auth',
    'verified'
])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [
        ProfileController::class,
        'edit'
    ])->name('profile.edit');
    Route::patch('/profile', [
        ProfileController::class,
        'update'
    ])->name('profile.update');
    Route::delete('/profile', [
        ProfileController::class,
        'destroy'
    ])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
