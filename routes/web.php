<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\CategoryController;
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

//category route sart here---------------------------------------------------------------------------------->

Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('/category/list',[CategoryController::class,'category_list'])->name('category.list');
Route::get('/category/create',[CategoryController::class,'create_category'])->name('category.create');
Route::post('/category/store',[CategoryController::class,'store_category'])->name('category.store');
Route::get('/category/edit/{id}',[CategoryController::class,'edit_category'])->name('category.edit');
Route::put('/category/update/{id}',[CategoryController::class,'update_category'])->name('category.update');
Route::get('/category/delete/{id}',[CategoryController::class,'delete_category'])->name('category.delete');

//category route end here-------------------------------------------------------------------------------------->