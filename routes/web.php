<?php

use App\Http\Controllers\DashboardFakturController;
use App\Http\Controllers\DashboardPaketController;
use App\Http\Controllers\DashboardReservasiController;
use App\Http\Controllers\DashboardBarberController;
use App\Http\Controllers\FrontpageController;
use App\Http\Controllers\LoginController;
use App\Models\Toko;
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

Route::get('/',[FrontpageController::class, 'index']);
Route::get('/login',[LoginController::class, 'login']);
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/about',[FrontpageController::class, 'about']);
Route::get('/dashboard', function(){return view('dashboard.index');});
Route::get('/dashboard/reservasis/recycle', [DashboardReservasiController::class, 'recycle']);
Route::get('/product', [FrontpageController::class, 'product']);
Route::post('/dashboard/pakets/delete/{paket}', [DashboardPaketController::class, 'delete']);
Route::get('/dashboard/pakets/restore/{paket}', [DashboardPaketController::class, 'restore']);
Route::post('/dashboard/barbers/delete/{barber}', [DashboardBarberController::class, 'delete']);
Route::get('/dashboard/barbers/restore/{barber}', [DashboardBarberController::class, 'restore']);
Route::post('/dashboard/reservasis/delete/{reservasi}', [DashboardReservasiController::class, 'delete']);
Route::get('/dashboard/reservasis/restore/{reservasi}', [DashboardReservasiController::class, 'restore']);
Route::get('/dashboard/pakets/recycle', [DashboardPaketController::class, 'recycle']);
Route::get('/dashboard/barbers/recycle', [DashboardBarberController::class, 'recycle']);
Route::post('/product/search',[FrontpageController::class,'showProduct'])->name('product.search');
Route::resource('/dashboard/pakets', DashboardPaketController::class);
Route::resource('/dashboard/barbers', DashboardBarberController::class);
Route::resource('/dashboard/reservasis', DashboardReservasiController::class);
Route::post('/product', [FrontpageController::class, 'beliProduk']);
Route::get('/dashboard/fakturs/recycle', [DashboardFakturController::class, 'recycle']);
Route::post('/dashboard/fakturs/delete/{faktur}', [DashboardFakturController::class, 'delete']);
Route::get('/dashboard/fakturs/restore/{faktur}', [DashboardFakturController::class, 'restore']);
Route::resource('/dashboard/fakturs', DashboardFakturController::class);


