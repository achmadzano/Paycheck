<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//route for login
Route::get('/', function () {
    return view('auth.login');
});


Route::middleware('auth')->group(function () {

    
    // route for register
    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');
    
    // Route::get('/dashboard', [Controller::class, 'showEmployee'] )->name('dashboard');
    Route::get('/tracking', [Controller::class, 'showEmployeeAttendance'] )->name('tracking');
    
    // php
    
    Route::get('/dashboard', [Controller::class, 'showEmployee'])
        ->middleware(['auth', 'verified'])
        ->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
