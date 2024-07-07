<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home-ad', [App\Http\Controllers\HomeController::class, 'home_ad'])->name('home-ad');

//Backend
Route::get('/Admin_login', [App\Http\Controllers\AdminController::class, 'index'])->name('Admin_login');
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'show_dashboard'])->name('dashboard');
Route::post('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('logout');
//category
Route::get('/add-ctg-product', [App\Http\Controllers\CategoryProduct::class, 'add_ctg_product'])->name('add-ctg-product');
Route::get('/edit-ctg-product/{category_product_id}', [App\Http\Controllers\CategoryProduct::class, 'edit_ctg_product'])->name('edit-ctg-product');
Route::get('/delete-ctg-product/{category_product_id}', [App\Http\Controllers\CategoryProduct::class, 'delete_ctg_product'])->name('edit-ctg-product');
Route::get('/all-ctg-product', [App\Http\Controllers\CategoryProduct::class, 'all_ctg_product'])->name('all-ctg-product');
Route::get('/unactive-ctg-product/{category_product_id}', [App\Http\Controllers\CategoryProduct::class, 'unactive_ctg_product'])->name('unactive-ctg-product');
Route::get('/active-ctg-product/{category_product_id}', [App\Http\Controllers\CategoryProduct::class, 'active_ctg_product'])->name('active-ctg-product');
Route::post('/save-ctg-product', [App\Http\Controllers\CategoryProduct::class, 'save_ctg_product'])->name('save-ctg-product');
Route::post('/update-ctg-product/{category_product_id}', [App\Http\Controllers\CategoryProduct::class, 'update_ctg_product'])->name('update-ctg-product');
// Product
Route::get('/add-product', [App\Http\Controllers\ManageProduct::class, 'add_product'])->name('add-product');
Route::get('/edit-product/{product_id}', [App\Http\Controllers\ManageProduct::class, 'edit_product'])->name('edit-product');
Route::get('/delete-product/{product_id}', [App\Http\Controllers\ManageProduct::class, 'delete_product'])->name('edit-product');
Route::get('/all-product', [App\Http\Controllers\ManageProduct::class, 'all_product'])->name('all-product');
Route::get('/unactive-product/{product_id}', [App\Http\Controllers\ManageProduct::class, 'unactive_product'])->name('unactive-product');
Route::get('/active-product/{product_id}', [App\Http\Controllers\ManageProduct::class, 'active_product'])->name('active-product');
Route::post('/save-product', [App\Http\Controllers\ManageProduct::class, 'save_product'])->name('save-product');
Route::post('/update-product/{product_id}', [App\Http\Controllers\ManageProduct::class, 'update_product'])->name('update-product');
//Lego2
Route::get('/all-product2', [App\Http\Controllers\Lego2Controller::class, 'all_product2'])->name('all-product2');
Route::get('/add-product2', [App\Http\Controllers\Lego2Controller::class, 'add_product2'])->name('add-product2');
Route::post('/save-product2', [App\Http\Controllers\Lego2Controller::class, 'save_product2'])->name('save-product2');

//Order
Route::get('/add-order', [App\Http\Controllers\OrderController::class, 'add_order'])->name('add-order');
Route::get('/all-order', [App\Http\Controllers\OrderController::class, 'all_order'])->name('all-order');
Route::post('/save-order', [App\Http\Controllers\OrderController::class, 'save_order'])->name('save-order');
Route::post('/save-ordered', [App\Http\Controllers\OrderController::class, 'save_ordered'])->name('save-ordered');
Route::get('/add-ordered', [App\Http\Controllers\OrderController::class, 'add_ordered'])->name('add-ordered');
Route::get('/all-ordered', [App\Http\Controllers\OrderController::class, 'all_ordered'])->name('all-ordered');
