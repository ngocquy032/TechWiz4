<?php

use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\User2Controller;
use App\Http\Controllers\Admin\UserController;
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



// admin




Route::prefix('admin')->group(function(){
    Route::redirect('', 'admin/user');


    Route::prefix('user')->group(function(){
        Route::get('/', [ UserController::class, 'index'])->name('user.index');;
        Route::get('/create', [UserController::class, 'create']);
        Route::get('{id}', [ UserController::class, 'show']);
        Route::get('{id}/edit', [ UserController::class, 'edit']);

    });

    Route::prefix('order')->group(function(){
        Route::get('/', [OrderController::class, 'index'])->name('order.index');;
        Route::get('{id}', [OrderController::class, 'show']);


    });
    Route::prefix('product')->group(function(){
        Route::get('/', [ ProductController::class, 'index'])->name('order.index');;
        Route::get('/create', [ProductController::class, 'create']);
        Route::get('{id}', [ ProductController::class, 'show']);
        Route::get('{id}/edit', [ ProductController::class, 'edit']);
    });



    Route::prefix('login')->group(function(){
        Route::get('',[\App\Http\Controllers\Admin\HomeController::class, 'getLogin']);
    });



});



