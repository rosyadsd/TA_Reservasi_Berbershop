<?php

use App\Http\Controllers\DashboardFakturController;
use App\Http\Controllers\DashboardHandphoneController;
use App\Http\Controllers\DashboardInvoiceController;
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
Route::get('/dashboard/invoices/recycle', [DashboardInvoiceController::class, 'recycle']);
Route::get('/product', [FrontpageController::class, 'product']);
Route::post('/dashboard/handphones/delete/{handphone}', [DashboardHandphoneController::class, 'delete']);
Route::get('/dashboard/handphones/restore/{handphone}', [DashboardHandphoneController::class, 'restore']);
Route::post('/dashboard/invoices/delete/{invoice}', [DashboardInvoiceController::class, 'delete']);
Route::get('/dashboard/invoices/restore/{invoice}', [DashboardInvoiceController::class, 'restore']);
Route::get('/dashboard/handphones/recycle', [DashboardHandphoneController::class, 'recycle']);
Route::post('/product/search',[FrontpageController::class,'showProduct'])->name('product.search');
Route::resource('/dashboard/handphones', DashboardHandphoneController::class);
Route::resource('/dashboard/invoices', DashboardInvoiceController::class);
Route::post('/product', [FrontpageController::class, 'beliProduk']);
Route::get('/dashboard/fakturs/recycle', [DashboardFakturController::class, 'recycle']);
Route::post('/dashboard/fakturs/delete/{faktur}', [DashboardFakturController::class, 'delete']);
Route::get('/dashboard/fakturs/restore/{faktur}', [DashboardFakturController::class, 'restore']);
Route::resource('/dashboard/fakturs', DashboardFakturController::class);


