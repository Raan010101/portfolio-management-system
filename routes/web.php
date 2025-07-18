<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Landing page
Route::get('/', function () {
    return view('welcome');
});

// Default dashboard (not used since we do role-based dashboards)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Authenticated routes
Route::middleware(['auth', 'verified'])->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Role-based dashboards
    Route::get('/talent-dashboard', function () {
        return view('talent.TalentDashboard');
    })->name('talent.dashboard');

    Route::get('/client-dashboard', function () {
        return view('client.ClientDashboard');
    })->name('client.dashboard');
});

require __DIR__.'/auth.php';
