<?php

use App\Http\Livewire\Employee;
use App\Http\Livewire\AddEmployee;
use App\Http\Livewire\DetailEmployee;
use App\Http\Livewire\EditEmployee;
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

Route::get('/all-employee', Employee::class);

Route::get('/all-employee/add', AddEmployee::class)->name('all-employee.add');

Route::get('/all-employee/edit/{employee_id}', EditEmployee::class)->name('all-employee.edit');

Route::get('/all-employee/detail/{employee_id}', DetailEmployee::class)->name('all-employee.detail');