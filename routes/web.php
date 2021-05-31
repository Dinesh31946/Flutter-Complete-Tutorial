<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
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
Route::get('/productView', [BaseController::class, 'productView'])->name('productView');

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'makeLogin'])->name('admin.makeLogin');
Route::group(['middleware' => 'auth'], function(){

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Category controller routes
    Route::get('/categories', [CategoryController::class, 'index'])->name('category.list');
    Route::get('/category/add', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/add', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/edit/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::post('/category/delete', [CategoryController::class, 'destroy'])->name('category.delete');

});