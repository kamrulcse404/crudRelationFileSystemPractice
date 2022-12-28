<?php

use App\Http\Controllers\CompanyController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('companies', [CompanyController::class, 'index'])->name('company.index');
Route::get('company-create', [CompanyController::class, 'create'])->name('company.create');
Route::post('company-store', [CompanyController::class, 'store'])->name('company.store');
Route::get('company/{id}/edit', [CompanyController::class, 'edit'])->name('company.edit');
Route::put('company/{id}', [CompanyController::class, 'update'])->name('company.update');
Route::delete('company/{id}', [CompanyController::class, 'destroy'])->name('company.destroy');

Route::get('employee-create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('employee-store', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('employees', [EmployeeController::class, 'index'])->name('employee.index');
Route::delete('employees/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');