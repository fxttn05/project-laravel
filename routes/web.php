<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

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

Route::get('/', [PegawaiController::class, 'index'])->name('index');

Route::get('/tambahpegawai', [PegawaiController::class, 'create'])->name('tambahpegawai');
Route::post('/insertdata', [PegawaiController::class, 'store'])->name('insertdata');

Route::get('/tampilan/{id}', [PegawaiController::class, 'tampilan'])->name('tampilan');
Route::put('/updatedata/{id}', [PegawaiController::class, 'update'])->name('updatedata');

Route::delete('/deletedata/{id}', [PegawaiController::class, 'destroy'])->name('deletedata');




// Route::resource('user', PegawaiController::class);