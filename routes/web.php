<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductsCarController;
use App\Http\Controllers\BrandProductController;
use App\Http\Controllers\TypeVehicleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\postTypeController;

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

//frontend
Route::get('/', [HomeController::class, 'index'])->name('index');

//Route::get('/index', [HomeController::class, 'index'])->name('index');
//frontend
Route::get('/list', [HomeController::class, 'list'])->name('list');
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');

//Danh mục sản phẩm Ở list
Route::get('/category-type/{id}', [HomeController::class, 'show_category_type'])->name('category-type');
Route::get('/category-brand/{id}', [HomeController::class, 'show_category_brand'])->name('category-brand');
Route::get('/category-type-vehicles/{id}', [HomeController::class, 'show_category_tv'])->name('category-type-vehicles');


//backend
Route::group(['middleware' => ['check_login_admin'], 'as' => 'admin.','prefix' => 'admin'], function () {
    Route::get('/admin-login', [AdminController::class, 'index'])->name('admin-login');
    //->middleware('check_login_admin');
    Route::post('/admin-dashboard', [AdminController::class, 'dashboard'])->name('admin-dashboard');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [AdminController::class, 'show_dashboard'])->name('dashboard');
    // ->middleware('check_login_admin');


//products car
    Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
        Route::get('/list', [ProductsCarController::class, 'index'])->name('list');
        Route::get('/add', [ProductsCarController::class, 'create'])->name('add');
        Route::get('/edit/{id}', [ProductsCarController::class, 'edit'])->name('edit');

        Route::get('/delete/{id}', [ProductsCarController::class, 'destroy'])->name('delete');
        Route::get('/show/{id}', [ProductsCarController::class, 'show'])->name('show');
        Route::post('/update/{id}', [ProductsCarController::class, 'update'])->name('update');
        Route::post('/save', [ProductsCarController::class, 'store'])->name('save');
    });
//post Type car (hình thức sản phẩm)
    Route::group(['prefix' => 'postType', 'as' => 'postType.'], function () {
        Route::get('/list', [postTypeController::class, 'index'])->name('list');
        Route::get('/add', [postTypeController::class, 'create'])->name('add');
        Route::get('/edit/{id}', [postTypeController::class, 'edit'])->name('edit');

        Route::get('/delete/{id}', [postTypeController::class, 'destroy'])->name('delete');
        Route::post('/update/{id}', [postTypeController::class, 'update'])->name('update');
        Route::post('/save', [postTypeController::class, 'store'])->name('save');
    });

//brand products (hình thức hãng)
    Route::group(['prefix' => 'brandProduct', 'as' => 'brandProduct.'], function () {
        Route::get('/list', [BrandProductController::class, 'index'])->name('list');
        Route::get('/add', [BrandProductController::class, 'create'])->name('add');
        Route::get('/edit/{id}', [BrandProductController::class, 'edit'])->name('edit');

        Route::get('/delete/{id}', [BrandProductController::class, 'destroy'])->name('delete');
        Route::post('/update/{id}', [BrandProductController::class, 'update'])->name('update');
        Route::post('/save', [BrandProductController::class, 'store'])->name('save');
    });

//brand products (hình thức hãng)
    Route::group(['prefix' => 'typeVehicle', 'as' => 'typeVehicle.'], function () {
        Route::get('/list', [TypeVehicleController::class, 'index'])->name('list');
        Route::get('/add', [TypeVehicleController::class, 'create'])->name('add');
        Route::get('/edit/{id}', [TypeVehicleController::class, 'edit'])->name('edit');

        Route::get('/delete/{id}', [TypeVehicleController::class, 'destroy'])->name('delete');
        Route::post('/update/{id}', [TypeVehicleController::class, 'update'])->name('update');
        Route::post('/save', [TypeVehicleController::class, 'store'])->name('save');
    });
});


//cart
Route::post('/save-cart', [CartController::class, 'save_cart'])->name('save-cart');
Route::get('/show-cart', [CartController::class, 'show-cart'])->name('show-cart');
