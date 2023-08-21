<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\KarcisController;
use App\Http\Controllers\ValidationController;
use App\Http\Controllers\ChartController;

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
Route::get('/mappingCity/{province_id}', [HomeController::class, 'selectCity'])->name('mappingCity');

Route::get('/signin', [AuthController::class, 'signin'])->name('login');
Route::post('/postsignin', [AuthController::class, 'postsignin'])->name('postsignin');
Route::post('/verifemail', [AuthController::class, 'verifemail'])->name('verifemail');

Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/storesignup', [AuthController::class, 'storesignup'])->name('storesignup');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/validation/email/{email}', [ValidationController::class, 'checkUserEmailUnique'])->name('validation.email');
Route::get('/validation/username/{username}', [ValidationController::class, 'checkUserUsernameUnique'])->name('validation.username');

Route::get('/listevent', [EventController::class, 'listevent'])->name('listevent');
Route::post('/listevent', [EventController::class, 'listevent'])->name('listevent');
Route::get('/event/detail/{id}', [EventController::class, 'detailevent'])->name('detailevent');
Route::post('/getCategory', [EventController::class, 'getCategory'])->name('getCategory');


Route::middleware(['auth'])->group(function () {
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil');

    Route::post('/edit-profil', [ProfilController::class, 'edit'])->name('edit-profil');
    Route::post('/change-pw', [ProfilController::class, 'changepw'])->name('change-pw');

    Route::get('/karcis', [KarcisController::class, 'karcis'])->name('karcis');
    Route::get('/listkarcis', [KarcisController::class, 'listkarcis'])->name('listkarcis');
    Route::get('/karcisuser', [KarcisController::class, 'karcisuser'])->name('karcisuser');

    Route::post('/storechart', [EventController::class, 'storechart'])->name('storechart');

    Route::get('/indexchart/{id}', [ChartController::class, 'indexchart'])->name('indexchart');
    Route::post('/checkoutchart', [ChartController::class, 'checkoutchart'])->name('checkoutchart');
    Route::post('/deletechart/{id}', [ChartController::class, 'delete'])->name('deletechart');
    
});