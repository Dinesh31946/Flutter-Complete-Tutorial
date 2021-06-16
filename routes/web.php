<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BaseController::class, 'home']);
Route::get('/home', [BaseController::class, 'home'])->name('home');
Route::get('/specialOffer', [BaseController::class, 'specialOffer'])->name('specialOffer');
Route::get('/delivery', [BaseController::class, 'delivery'])->name('delivery');
Route::get('/contact-us', [BaseController::class, 'contact'])->name('contact');
Route::get('/cart', [BaseController::class, 'cart'])->name('cart');
Route::get('/productView/{id}', [BaseController::class, 'productView'])->name('productView');
Route::get('user/login', [BaseController::class, 'user_login'])->name('user_login');
Route::get('user/register', [BaseController::class, 'user_register'])->name('user_register');
Route::post('user/register', [BaseController::class, 'user_store'])->name('user_store');
Route::post('user/login', [BaseController::class, 'loginCheck'])->name('loginCheck');
Route::get('user/logout', [BaseController::class, 'makeLogout'])->name('makeLogout');


Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'makeLogin'])->name('admin.makeLogin');
Route::group(['middleware' => 'auth'], function(){

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Users controller routes
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');
    Route::post('/user/delete', [UserController::class, 'destroy'])->name('user.delete');

    // Category controller routes
    Route::get('/categories', [CategoryController::class, 'index'])->name('category.list');
    Route::get('/category/add', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/add', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/edit/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::post('/category/delete', [CategoryController::class, 'destroy'])->name('category.delete');

    // Product controller routes
    Route::get('/products', [ProductController::class, 'index'])->name('product.list');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/create', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/edit/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::post('/product/delete', [ProductController::class, 'destroy'])->name('product.delete');
    Route::get('/product/details/{id}', [ProductController::class, 'extraDetails'])->name('product.extraDetails');
    Route::post('/product/details/{id}', [ProductController::class, 'extraDetailsStore'])->name('product.extraDetailsStore'); 

});