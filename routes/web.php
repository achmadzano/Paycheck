<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;    

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
    Route::get('/tracking', [Controller::class, 'showTrackingContent'] )->name('tracking');
    
    //route for employee management
    // Route::get('/employee', [Controller::class, 'showEmployeeDetail'] )->name('employee');
    
    Route::get('/dashboard', [Controller::class, 'showEmployee'])
        ->middleware(['auth', 'verified'])
        ->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Route::get('/employee', [EmployeeController::class, 'showEmployeeDetail','index'] )->name('employee.index');
    
    Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('/employee/create', [EmployeeController::class, 'create'] )->name('employee.create');
    Route::post('/employee', [EmployeeController::class, 'store'] )->name('employee.store');
    Route::get('/employee/{employee}/edit', [EmployeeController::class, 'edit'] )->name('employee.edit');
    Route::put('/employee/{employee}/update', [EmployeeController::class, 'update'] )->name('employee.update');
    Route::delete('/employee/{employee}/destroy', [EmployeeController::class, 'destroy'] )->name('employee.destroy');

});
require __DIR__.'/auth.php';