<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\BrandController;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;

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

Route::get('/', [HomeController::class, 'index']) -> name('home');
Route::get('/about',[HomeController::class,'about']);
Route::get('/contact',[HomeController::class,'contact']);

Route::get('/productdetail/{id}',[HomeController::class,'productdetail']);
Route::get('/list/{id}',[HomeController::class,'listByCategory']);
Route::group(['prefix' => 'cart'],function(){
    Route::get('add/{product}', [CartController::class,'add'])-> name('cart.add');
    Route::get('update/{id}', [CartController::class,'update'])-> name('cart.update');
    Route::get('remove/{id}', [CartController::class,'remove'])-> name('cart.remove');
    Route::get('removeAll', [CartController::class,'removeAll'])-> name('cart.removeAll');
    Route::get('view', [CartController::class,'view'])-> name('cart.view');
});
Route::group(['prefix' => 'customer'],function(){
    Route::get('register', [CustomerController::class,'signup'])-> name('customer.register');
    Route::get('login', [CustomerController::class,'index'])-> name('customer.login');
    Route::post('register', [CustomerController::class,'register']);
    Route::post('login', [CustomerController::class,'login']);
    Route::get('logout', [CustomerController::class,'logout'])-> name('customer.logout');
});


//route admin

Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {
    Route::get('', [BackendController::class, 'index']) -> name('admin');

    Route::group(['prefix' => 'category'], function () {
        Route::get('', [CategoryController::class, 'index']);
        Route::post('addnew', [CategoryController::class, 'addnew']);
        Route::get('edit/{id}', [CategoryController::class, 'edit']);
        Route::post('update/{id}', [CategoryController::class, 'update']);
        Route::get('delete/{id}', [CategoryController::class, 'delete']);
    });

    Route::group(['prefix' => 'size'], function () {
        Route::get('', [SizeController::class, 'index']);
        Route::post('addnew', [SizeController::class, 'addnew']);
        Route::get('edit/{id}', [SizeController::class, 'edit']);
        Route::post('update/{id}', [SizeController::class, 'update']);
        Route::get('delete/{id}', [SizeController::class, 'delete']);
    });

    Route::group(['prefix' => 'brand'], function () {
        Route::get('', [BrandController::class, 'index']);
        Route::post('addnew', [BrandController::class, 'addnew']);
        Route::get('edit/{id}', [BrandController::class, 'edit']);
        Route::post('update/{id}', [BrandController::class, 'update']);
        Route::get('delete/{id}', [BrandController::class, 'delete']);
    });
    // Route::resource('brand',BrandController::class);



    Route::group(['prefix' => 'product'], function () {
        Route::get('', [ProductController::class, 'index']);
        Route::get('create', [ProductController::class, 'create']);
        Route::post('addnew', [ProductController::class, 'addnew']);
        Route::get('edit/{id}', [ProductController::class, 'edit']);
        Route::post('update/{id}', [ProductController::class, 'update']);
        Route::get('delete/{id}', [ProductController::class, 'delete']);
        Route::get('viewimage/{id}', [ProductImageController::class, 'viewimg']);
        Route::post('viewimage/addimage/{id}', [ProductImageController::class, 'addimg']);
        Route::get('viewimage/delete/{id}/{idimg}', [ProductImageController::class, 'deleteimg']);
    });
    Route::group(['prefix' => 'order'], function () {
        Route::get('index', [OrderController::class,'index'])-> name('admin.order');
        Route::get('detail/{order}', [OrderController::class,'detail'])-> name('admin.order.detail');
        Route::put('status/{order}', [OrderController::class,'status'])-> name('admin.order.status');
    });
});
Route::group(['prefix' => 'order','middleware'=>'customer'],function(){
    Route::get('checkout', [CartController::class,'checkout'])-> name('order.checkout');
    Route::get('success', [CartController::class,'success'])-> name('order.success');
    Route::post('placeorder', [CartController::class,'placeorder'])-> name('order.placeorder');
    Route::get('history', [CartController::class,'history'])-> name('order.history');
    Route::get('detail/{order}', [CartController::class,'detail'])-> name('order.detail');
});
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('profile', [LoginController::class, 'profile'])->name('profile');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('signup', [LoginController::class, 'signup'])->name('signup');
Route::post('signup', [LoginController::class, 'register']);
?>