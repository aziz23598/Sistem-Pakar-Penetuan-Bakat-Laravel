<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BakatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
//     return view('welcome');
// });

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';*/

Route::get('/', [MainController::class, 'index'])->middleware('guest');
Route::get('/bakat', [MainController::class, 'bakat']);
Route::get('/about', [MainController::class, 'about']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('auth');
Route::get('/profile/{id}', [MainController::class, 'profile'])->middleware('auth');
Route::get('/profile/edit/{id}', [MainController::class, 'edit'])->middleware('auth');
Route::post('/profile/update/{id}', [MainController::class, 'update'])->middleware('auth');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/admin', [AdminController::class, 'manage'])->middleware('role');

Route::get('/info', [TestController::class, 'info']);
Route::get('/test/{id}', [TestController::class, 'test']);
Route::post('/proses', [TestController::class, 'proses']);
Route::post('/hasil', [TestController::class, 'hasil']);

Route::get('/soal', [SoalController::class, 'index'])->middleware('role');
Route::get('/soal/tambah', [SoalController::class, 'tambah'])->middleware('role');
Route::post('/soal/tambah', [SoalController::class, 'store'])->middleware('role');
Route::get('/soal/{id}', [SoalController::class, 'edit'])->middleware('role');
Route::post('/soal/update/{id}', [SoalController::class, 'update'])->middleware('role');
Route::get('/soal/delete/{id}', [SoalController::class, 'destroy'])->middleware('role');

Route::get('/data-bakat', [BakatController::class, 'index'])->middleware('role');
Route::get('/bakat/{id}', [BakatController::class, 'edit'])->middleware('role');
Route::post('/bakat/update/{id}', [BakatController::class, 'update'])->middleware('role');

Route::get('/user', [AdminController::class, 'index'])->middleware('role');
Route::get('/user/{id}', [AdminController::class, 'edit']);
Route::get('/user/delete/{id}', [AdminController::class, 'destroy'])->middleware('role');
Route::post('/user/update/{id}', [AdminController::class, 'update']);

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/ 