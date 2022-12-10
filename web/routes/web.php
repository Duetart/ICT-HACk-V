<?php

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
Route::get('/burse', [ProjectController::class, 'index'])->name('burse');


Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::post('/update', [HomeController::class, 'update'])->middleware('auth')->name('update');

Route::get('/my-projects', [ProjectController::class, 'studentProjects'])->middleware('auth');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
