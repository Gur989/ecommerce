<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\appController;
use App\Http\Controllers\userController;
use App\Http\Controllers\productController;
use App\Http\Controllers\detailController;


Route::get('/login',function(){
   return view("login");
});
Route::post('/logged',[userController::class,'login'])->name('loggedIn');

Route::get('/product',[productController::class,'index'])->name('productInfo');
Route::get('/detail/{id}',[productController::class,'detail'])->name('detail');
Route::get('/search',[productController::class,'search'])->name('search');
Route::Post('/addToCart',[productController::class,'addToCart'])->name('addToCart');
Route::get('/about/{lang?}',[productController::class,'about'])->name('about');
Route::get('/logout',function(){
   return view('login');
})->name('logout');
Route::get('/cartList',[productController::class,'cartList'])->name('cartList');
Route::get('/remove/{id}',[productController::class,'remove'])->name('remove');
