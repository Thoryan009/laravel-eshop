<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProductController;



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/product-detail/{id}', [DetailController::class, 'index'])->name('product.detail');

Route::get('/product-cart', [CartController::class, 'index'])->name('product.cart');
Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/remove-cart/{rowId}', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('/update-cart/', [CartController::class, 'updateCart'])->name('cart.update');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout/new-customer', [CheckoutController::class, 'newCustomer'])->name('checkout.new-customer');
Route::post('/checkout/login-customer', [CheckoutController::class, 'loginCustomer'])->name('checkout.login-customer');
Route::get('/checkout/billing-info', [CheckoutController::class, 'billingInfo'])->name('checkout.billing-info');

Route::get('/customer/register/page', [CustomerAuthController::class, 'registerPage'])->name('customer.checkout.billing-info');
Route::get('/customer/register', [CustomerAuthController::class, 'registerAccount'])->name('customer.register');
Route::get('/customer/login/page', [CustomerAuthController::class, 'loginPage'])->name('customer.login.page');
Route::post('/customer/login', [CustomerAuthController::class, 'loginAccount'])->name('customer.login');
Route::get('/customer/logout', [CustomerAuthController::class, 'logout'])->name('customer.logout');
//Route::get('/customer-register', [CustomerAuthController::class, 'registerPage'])->name('customer.register');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/category-create', [CategoryController::class, 'index'])->name('category.create');
    Route::get('/category-manage', [CategoryController::class, 'manage'])->name('category.manage');
    Route::post('/category-store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category-edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category-update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category-delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');


    Route::resource('subCategory', SubCategoryController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('unit', UnitController::class);
    Route::resource('product', ProductController::class);

    Route::get('/getSubCategories', [ProductController::class, 'sendSubcategories'])->name('getSubCategories');
});
