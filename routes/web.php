<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientsController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/create', function () {
//    return view('create');
//});

// Route::get('/', function () {
//     return view('home.index');
// })->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/create', [PatientsController::class, 'create'])->name('patients.create');
Route::post('/store', [PatientsController::class, 'store'])->name('patients.store');
