<?php

use App\Http\Controllers\Front\AccountController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\CheckOutController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\IntroduceController;
use App\Http\Controllers\Front\ShopController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class, 'index']);


Route::prefix('shop')->group(function () {
    //hien thi ddsp sp
    Route::get('/', [ShopController::class, 'index'])->name('shop.index');
    Route::get('/product', [ShopController::class, 'show']);


});

Route::prefix('cart')->group(function(){

    Route::get('/', [CartController::class , 'index']);


 });


Route::prefix('introduce')->group(function(){
    Route::get('/blog', [IntroduceController::class, 'showBlog'])->name('introduce.showBlog');
    Route::get('/about', [IntroduceController::class, 'showAbout'])->name('introduce.showAbout');

    Route::get('/contact', [IntroduceController::class, 'showContact'])->name('introduce.showContact');
});

Route::prefix('checkout')->group(function(){
    Route::get('/', [CheckOutController::class, 'index']);
});

Route::prefix('account')->group(function(){
    Route::get('/', [AccountController::class, 'index']);
});
