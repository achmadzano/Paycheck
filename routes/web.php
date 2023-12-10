<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;    
//checkRole
use App\Http\Middleware\CheckRole;
use App\Http\Requests\Auth\LoginController;
//kernel
use App\Http\Kernel;

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

//route for !dashboard_page_employee.blade.php
Route::get('/dashboard_employee', function () {
    return view('dashboard_page_employee');
});



Route::post('/dashboard_employee', [LoginRequest::class, 'employeeLogin'])->name('dashboard_employee');

// Route::middleware(['auth', 'checkRole:admin'])->group(function () {

    
//     // route for register
//     Route::get('/register', function () {
//         return view('auth.register');
//     })->name('register');
    
//     // Route::get('/dashboard', [Controller::class, 'showEmployee'] )->name('dashboard');
//     Route::get('/tracking', [Controller::class, 'showTrackingContent'] )->name('tracking');
    
//     //route for employee management
//     // Route::get('/employee', [Controller::class, 'showEmployeeDetail'] )->name('employee');
    
//     Route::get('/dashboard', [Controller::class, 'showEmployee'])
//         ->middleware(['auth', 'verified'])
//         ->name('dashboard');

//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


//     // Route::get('/employee', [EmployeeController::class, 'showEmployeeDetail','index'] )->name('employee.index');
    
//     Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
//     Route::get('/employee/create', [EmployeeController::class, 'create'] )->name('employee.create');
//     Route::post('/employee', [EmployeeController::class, 'store'] )->name('employee.store');
//     Route::get('/employee/{employee}/edit', [EmployeeController::class, 'edit'] )->name('employee.edit');
//     Route::put('/employee/{employee}/update', [EmployeeController::class, 'update'] )->name('employee.update');
//     Route::delete('/employee/{employee}/destroy', [EmployeeController::class, 'destroy'] )->name('employee.destroy');

//     // route for button to create page

// });

// Route for normal users
// Route::middleware(['auth', 'checkRole:user'])->group(function () {

//     // Route for normal user dashboard
//     Route::get('/dashboard_employee', function () {
//         return view('dashboard_page_employee');
//     })->name('dashboard_employee');

//     // Add other routes specific to normal users if needed

// });

Route::group(['middleware'=>'role:admin'],function () {
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

Route::group(['middleware'=>'role:user'],function () {
    Route::get('/dashboard_employee', function () {
        return view('dashboard_page_employee');
    })->name('dashboard_employee');
});
    


require __DIR__.'/auth.php';

