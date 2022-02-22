<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [PagesController::class, 'app'])->name('home');
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student/create', [StudentController::class, 'createSubmit'])->name('student.submit');
Route::get('/student/list', [StudentController::class, 'list'])->name('student.list');
Route::get('/stuedent/get/{id?}', [StudentController::class, 'edit'])->name('student.get');
Route::post('/student/editSubmit/{id?}', [StudentController::class, 'editSubmit'])->name('student.edit');
Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::post('/login', [PagesController::class, 'loginSubmit'])->name('loginSubmit');

