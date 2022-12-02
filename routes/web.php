<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ecommerecController;
use App\Http\Controllers\productController;

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
Route::get('/login',function(){
    return view('login');
});

// Route::get('/forgot',function(){
//     Session::forgot('user');
//     return redirect('/login');
// }
Route::view('/ragister','ragister');
Route::POST('/login',[ecommerecController::class,'login'])->name('login');
Route::POST('/ragister',[ecommerecController::class,'Ragister'])->name('ragister');
Route::get('/products',[productController::class,'products'])->name('products');
Route::get('/details/{id}',[productController::class,'details'])->name('details');
Route::get('/search',[productController::class,'search'])->name('search');
Route::post('/add_to_cart',[productController::class,'Addtocart'])->name('addtocart');
Route::get('/home',[productController::class,'home'])->name('home');
Route::get('/forgot',[productController::class,'forgot'])->name('forgot');
Route::get('/cartlist',[productController::class,'cart'])->name('cart');
Route::get('/remove/{id}',[productController::class,'remove'])->name('remove');
Route::get('/ordernow',[productController::class,'Ordernow'])->name('ordernow');
Route::post('/orderplace',[productController::class,'orderplace'])->name('orderplace');
Route::get('/aboutus',[productController::class,'aboutus'])->name('abouts');
Route::get('/myorder',[productController::class,'myorder'])->name('myorder');
Route::get('/myprofile/{id}',[ecommerecController::class,'myprofile'])->name('myprofile');
