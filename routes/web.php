<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;

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

Route::get('/',[BerandaController::class, 'beranda'])->name('Beranda');
Route::get('/formgaransi',[BerandaController::class, 'formgaransi'])->name('FormGaransi');
Route::post('/pesangaransi',[BerandaController::class, 'pesan_garansi'])->name('PesanGaransi');
Route::post('/bayargaransi/{$id}',[BerandaController::class, 'bayar_garansi'])->name('BayarGaransi');

Route::get('/formmember',[BerandaController::class, 'formmember'])->name('FormMember');
Route::post('/pesanmember',[BerandaController::class, 'pesan_member'])->name('PesanMember');
Route::post('/bayarmember/{$id}',[BerandaController::class, 'bayar_member'])->name('BayarMember');

// admin
Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('Dashboard');
Route::get('/adminformmember',[DashboardController::class, 'adminformmember'])->name('AdminFormMember');
Route::get('/adminformgaransi',[DashboardController::class, 'adminformgaransi'])->name('AdminFormGaransi');

//ajax
Route::post('/ajaxRequest',[BerandaController::class, 'ajaxRequest'])->name('ajaxRequest');
Route::get('/deleteSession',[BerandaController::class,'delSession']);