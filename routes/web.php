<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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
    return view('HomePage');
});
Route::group(['middleware' => ['auth','Cekrole:pengguna']], function () {
    route::get('/Pengguna',[HomeController::class, 'pengguna'])->name('Pengguna');
});
Route::group(['middleware' => ['auth','Cekrole:Admin']], function () {
    route::get('/Pegawai',[HomeController::class, 'pegawai'])->name('Pegawai');
});

Route::get('/katalog',[HomeController::class, 'katalog'])->name('katalog');
Route::get('/katalogpengguna',[HomeController::class, 'katalogpengguna'])->name('katalogpengguna');

Route::get('/Pesanan',[HomeController::class, 'Pesanan'])->name('Pesanan');

Route::get('/LoginAdmin',[LoginController::class, 'LoginAdmin'])->name('LoginAdmin');
Route::post('/postloginadmin',[LoginController::class, 'postloginadmin'])->name('postloginadmin');

Route::get('/LoginPengguna',[LoginController::class, 'LoginPengguna'])->name('LoginPengguna');
Route::post('/postloginpengguna',[LoginController::class, 'postloginpengguna'])->name('postloginpengguna');

Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

Route::get('/registrasipegawai',[LoginController::class, 'registrasipegawai'])->name('registrasipegawai');
Route::post('/simpanregistrasipegawai',[LoginController::class, 'simpanregistrasipegawai'])->name('simpanregistrasipegawai');

Route::get('/registrasipengguna',[LoginController::class, 'registrasipengguna'])->name('registrasipengguna');
Route::post('/simpanregistrasipengguna',[LoginController::class, 'simpanregistrasipengguna'])->name('simpanregistrasipengguna');
