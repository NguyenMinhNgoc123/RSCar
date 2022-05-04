<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\MyOrderController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductsCarController;
use App\Http\Controllers\BrandProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\TypeVehicleController;
use App\Http\Controllers\UserController;
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
Route::post('/search-product', [HomeController::class, 'search_product'])->name('search-product');
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');

//Danh mục sản phẩm Ở list
Route::post('/show-category', [HomeController::class, 'show_category']);
Route::post('/pagination/fetch', [HomeController::class, 'fetch'])->name('pagination.fetch');

//search list


//backend admin
Route::group(['middleware' => ['check_login_admin'], 'as' => 'admin.','prefix' => 'admin'], function () {
    Route::get('/admin-login', [AdminController::class, 'index'])->name('admin-login');
    //->middleware('check_login_admin');
    Route::post('/admin-dashboard', [AdminController::class, 'dashboard'])->name('admin-dashboard');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [AdminController::class, 'show_dashboard'])->name('dashboard');
    // ->middleware('check_login_admin');
//manage display products
    Route::group(['prefix' => 'manage-show', 'as' => 'manage-show.'], function () {
        Route::get('/list', [ShowController::class, 'list'])->name('list');
        Route::get('/active-hot/{id}', [ShowController::class, 'active_hot'])->name('active-hot');
        Route::get('/un-active-hot/{id}', [ShowController::class, 'un_active_hot'])->name('un-active-hot');

        Route::get('/active-sale/{id}', [ShowController::class, 'active_sale'])->name('active-sale');
        Route::get('/un-active-sale/{id}', [ShowController::class, 'un_active_sale'])->name('un-active-sale');

        Route::get('/active-bestseller/{id}', [ShowController::class, 'active_bestseller'])->name('active-bestseller');
        Route::get('/un-active-bestseller/{id}', [ShowController::class, 'un_active_bestseller'])->name('un-active-bestseller');
    });
//manage admin
    Route::get('/list-admin', [AdminController::class, 'list_admin'])->name('list-admin');
    Route::get('/add-admin', [AdminController::class, 'add_admin'])->name('add-admin');
    Route::post('/save-admin', [AdminController::class, 'save_admin'])->name('save-admin');
    Route::get('/edit-admin/{id}', [AdminController::class, 'edit_admin'])->name('edit-admin');
    Route::post('/update-admin/{id}', [AdminController::class, 'update_admin'])->name('update-admin');

//manage user
    Route::group(['prefix' => 'manage-user', 'as' => 'manage-user.'], function () {
        Route::get('/list', [AdminController::class, 'list_user'])->name('list');
        Route::get('/delete/{id}', [AdminController::class, 'delete_user'])->name('delete');

    });
//manage order
    Route::group(['prefix' => 'order', 'as' => 'order.'], function () {
        Route::get('/list', [OrderController::class, 'index'])->name('list');
        Route::get('/detail/{id}', [OrderController::class, 'show'])->name('detail');
        Route::get('/edit/{id}', [OrderController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [OrderController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [OrderController::class, 'destroy'])->name('delete');

        Route::get('/list-completed', [OrderController::class, 'list_completed'])->name('list-completed');
        Route::get('/detail-completed/{id}', [OrderController::class, 'show_completed'])->name('detail-completed');

    });
//products
    Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
        Route::get('/list', [ProductsCarController::class, 'index'])->name('list');
        Route::get('/add', [ProductsCarController::class, 'create'])->name('add');
        Route::get('/edit/{id}', [ProductsCarController::class, 'edit'])->name('edit');

        Route::get('/delete/{id}', [ProductsCarController::class, 'destroy'])->name('delete');
        Route::get('/show/{id}', [ProductsCarController::class, 'show'])->name('show');
        Route::post('/update/{id}', [ProductsCarController::class, 'update'])->name('update');
        Route::post('/save', [ProductsCarController::class, 'store'])->name('save');

        Route::get('/active/{id}', [ProductsCarController::class, 'active'])->name('active');
        Route::get('/un-active/{id}', [ProductsCarController::class, 'un_active'])->name('un-active');
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

//backend user
Route::group(['middleware' => ['check_login_user'], 'as' => 'user.','prefix' => 'user'], function () {
    Route::get('/login-user', [UserController::class, 'login_user'])->name('login-user');

    Route::post('/user-dashboard', [UserController::class, 'dashboard'])->name('user-dashboard');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
//profile
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');

//change password
    Route::get('/change-password', [UserController::class, 'change_password'])->name('change-password');
    Route::post('/save-password', [UserController::class, 'save_password'])->name('save-password');

//my order
    Route::group(['prefix' => 'order', 'as' => 'order.'], function () {
        Route::get('/list', [MyOrderController::class, 'index'])->name('list');
        Route::get('/detail/{id}', [MyOrderController::class, 'show'])->name('detail');
        Route::get('/delete/{id}', [MyOrderController::class, 'destroy'])->name('delete');

        Route::get('/history-order', [MyOrderController::class, 'history_order'])->name('history-order');
    });
//check out
    Route::get('/checkout', [CheckOutController::class, 'checkout'])->name('checkout');
    Route::get('/send-payment', [CheckOutController::class, 'send_payment'])->name('send-payment');
    Route::get('/print-payment', [CheckOutController::class, 'print_payment'])->name('print-payment');
    Route::post('/save-checkout', [CheckOutController::class, 'save_checkout'])->name('save-checkout');
    Route::get('/payment', [CheckOutController::class, 'payment'])->name('payment');
    Route::post('/save-payment', [CheckOutController::class, 'save_payment'])->name('save-payment');

    Route::get('/add-cart/{id}', [CartController::class, 'addCart'])->name('add-cart');;
    Route::get('/delete-cart/{rowId}', [CartController::class, 'delete_cart']);

    Route::post('/save-cart', [CartController::class, 'save_cart'])->name('save-cart');
    Route::get('/show-cart', [CartController::class, 'show_cart'])->name('show-cart');
    Route::get('/delete-cart/{id}', [CartController::class, 'delete_cart'])->name('delete-cart');
    Route::get('/delete-all-cart', [CartController::class, 'delete_cart_all'])->name('delete-all-cart');

    Route::post('/update-cart-quantity', [CartController::class, 'update_cart_quantity'])->name('update-cart-quantity');
});

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/add-user', [UserController::class, 'save_user'])->name('add-user');

Route::group(['middleware' => ['check_not_login'], 'as' => 'guest.','prefix' => 'guest'], function () {

    Route::get('/input-email', [UserController::class, 'input_email'])->name('input-email');
    Route::post('/check-email', [UserController::class, 'check_email'])->name('check-email');

    Route::post('/check-otp', [UserController::class, 'check_otp'])->name('check-otp');
    Route::get('/form-change-password', [UserController::class, 'form_change_password'])->name('form-change-password');

    Route::post('/change-password-forgot', [UserController::class, 'change_password_forgot'])->name('change-password-forgot');

});
//cart


//Search



