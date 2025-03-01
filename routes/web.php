<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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
Route::get('/edit/{id}', [PatientsController::class, 'edit'])->name('patients.edit');
Route::put('/update/{id}', [PatientsController::class, 'update'])->name('patients.update');
Route::get('/search', [PatientsController::class, 'search'])->name('patients.search');
Route::delete('/destroy/{id}', [PatientsController::class, 'destroy'])->name('patients.destroy');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('home.dashboard');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/reports', function () {
    return view('reports.index');
})->name('reports.index');

Route::get('/users', function () {
    return view('users.index');
})->name('users.index');

Route::get('/logout', function () {
    return view('logout.index');
})->name('logout');

