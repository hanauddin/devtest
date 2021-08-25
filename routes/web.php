<?php

use App\Http\Controllers\ComputerController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('employees', EmployeeController::class);
    Route::resource('computers', ComputerController::class);

    // Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
    // Route::get('/employees/{employee}', [EmployeeController::class, 'show'])->name('employees.show');
    // Route::patch('/employes/{employee}', [EmployeeController::class, 'update']);
    // Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
});

require __DIR__.'/auth.php';
