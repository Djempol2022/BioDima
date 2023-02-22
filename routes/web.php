<?php

use App\Http\Controllers\FormulirMember;
use App\Http\Controllers\RajaOngkir\CheckOngkirController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulir-member', [FormulirMember::class, 'index']);
Route::post('/formulir-member-store', [FormulirMember::class, 'store']);

// Route::get('/ongkir', [CheckOngkirController::class, 'index']);
Route::post('/formulir-member', [FormulirMember::class, 'check_ongkir']);
Route::get('/cities/{province_id}', [FormulirMember::class, 'getCities']);
