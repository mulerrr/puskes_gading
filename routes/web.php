<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\HasilSwabController;

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

Route::get('login', [UserAuthController::class, 'login'])->middleware('AlreadyLoggedIn');
Route::get('register', [UserAuthController::class, 'register'])->middleware('AlreadyLoggedIn');
Route::post('create', [UserAuthController::class, 'create'])->name('auth.create');
Route::post('check', [UserAuthController::class, 'check'])->name('auth.check');
Route::get('profile', [UserAuthController::class, 'profile'])->middleware('IsLogged');
Route::get('logout', [UserAuthController::class, 'logout']);

Route::get('result', [ResultController::class, 'index'])->middleware('IsLogged');
Route::get('add', [ResultController::class, 'add'])->middleware('IsLogged');
Route::post('import', [ResultController::class, 'import'])->name('result.import');

Route::get('hasilswab', [HasilSwabController::class, 'hasilSwab']);
Route::post('cekswab', [HasilSwabController::class, 'cekSwab'])->name('hasil-swab.cekswab');