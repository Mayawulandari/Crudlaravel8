<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataBarangController;

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
Route::get('/databarang', [DataBarangController::class,'index'])->name('databarang');

Route::get('/tambahbarang', [DataBarangController::class,'tambahbarang'])->name('tambahbarang');
Route::post('/insertdata', [DataBarangController::class,'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [DataBarangController::class,'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [DataBarangController::class,'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [DataBarangController::class,'delete'])->name('delete');

//exportpdf
Route::get('/exportpdf', [DataBarangController::class,'exportpdf'])->name('exportpdf');
