<?php

use App\Http\Controllers\BurseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Auth;
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
})->name('welcome');

Route::get('/projects', [ProjectController::class, 'public_projects'])->name('projects');
Route::get('/students', [HomeController::class, 'public_students'])->name('students');

Route::get('/burse', [BurseController::class, 'index'])->name('burse');
Route::get('/burse/my', [BurseController::class, 'my'])->name('burse.my');
Route::get('/burse/edit/{id}', [BurseController::class, 'edit_form'])->name('burse.edit_form');
Route::get('/burse/registration', function () {
    return view('burse.add_lot');
})->middleware('auth')->name('burse.registration_form');
Route::post('/burse/registration', [BurseController::class, 'add'])->middleware('auth')->name('burse.registration');


Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::post('/update', [HomeController::class, 'update'])->middleware('auth')->name('update');

Route::get('/my-projects', [ProjectController::class, 'studentProjects'])->middleware('auth');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
