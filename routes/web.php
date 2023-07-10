<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\KarcisController;
use App\Http\Controllers\ValidationController;

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

Route::get('/', [HomeController::class, 'homepage'])->name('homepage');

Route::get('/signin', [AuthController::class, 'signin'])->name('signin');
Route::post('/postsignin', [AuthController::class, 'postsignin'])->name('postsignin');
Route::post('/verifemail', [AuthController::class, 'verifemail'])->name('verifemail');

Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/storesignup', [AuthController::class, 'storesignup'])->name('storesignup');

Route::get('/listevent', [EventController::class, 'listevent'])->name('listevent');
Route::get('/event/detail', [EventController::class, 'detailevent'])->name('detailevent');
Route::post('/event/search', [EventController::class, 'search'])->name('search');

Route::get('/karcis', [KarcisController::class, 'karcis'])->name('karcis');
Route::get('/listkarcis', [KarcisController::class, 'listkarcis'])->name('listkarcis');
Route::get('/karcisuser', [KarcisController::class, 'karcisuser'])->name('karcisuser');

Route::get('/validation/email/{email}', [ValidationController::class, 'checkUserEmailUnique'])->name('validation.email');
Route::get('/validation/username/{username}', [ValidationController::class, 'checkUserUsernameUnique'])->name('validation.username');