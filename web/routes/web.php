<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\StudentController;
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

Route::group(['middleware' => ['auth:company']], function () {
    Route::get('company/dashboard', [CompanyController::class, 'dashboard'])->name('company.dashboard');
});

Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('company/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::group(['middleware' => ['auth:student']], function () {
    Route::get('student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
});

Route::get('/students', function () {
    return view('personal_account');
});


require __DIR__.'/auth.php';
