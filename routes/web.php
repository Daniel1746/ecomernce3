<?php

use Illuminate\Support\Facades\Route;

use App\Http\controllers\Productcontroller;

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
Route::get('/product/register',[productController::class,'register'])->name('product/register');
Route::post('product.register',[productController::class,'store'])->name('product/register');
Route::get('/home', [App\Http\controllers\Homecontroller::class,'index'])->name('home');