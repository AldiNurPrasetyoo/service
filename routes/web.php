<?php

use App\Http\Controllers\jenis_kendaraan_Controller;
use App\Models\jenis_kendaraan;
use App\Models\kendaraan;
use App\Models\pemilik;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tes', function () {
    $kendaraan =jenis_kendaraan::all();
    echo $kendaraan;
});


Route::get('/jeniskendaraan',[jenis_kendaraan_Controller::class,'index'])->name('jnsKendaraan.index');
Route::get('/jeniskendaraan/add',[jenis_kendaraan_Controller::class,'create'])->name('jnsKendaraan.create');
Route::post('jeniskendaraan/add',[jenis_kendaraan_Controller::class,'store'])->name('jnsKendaraan.store');
Route::get('jeniskendaraan/edit/{id}',[jenis_kendaraan_Controller::class,'edit'])->name('jnsKendaraan.edit');
Route::post('jeniskendaraan/edit/{id}',[jenis_kendaraan_Controller::class,'update'])->name('jnsKendaraan.update');

