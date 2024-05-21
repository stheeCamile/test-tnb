<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Models\Department;
use App\Http\Controllers\WorkScheduleController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('employees/create', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('employees/show', [EmployeeController::class, 'show'])->name('employees.show');

Route::get('/departments/create', [DepartmentController::class, 'create'])->name('departments.create');
Route::post('/departments', [DepartmentController::class, 'store'])->name('departments.store');



Route::get('work-schedules', [WorkScheduleController::class, 'index'])->name('work-schedules.index');
Route::get('work-schedules/create', [WorkScheduleController::class, 'create'])->name('work-schedules.create');
Route::post('work-schedules', [WorkScheduleController::class, 'store'])->name('work-schedules.store');

