<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
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
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

//category route sart here---------------------------------------------------------------------------------->
Route::get('/category/list',[CategoryController::class,'category_list'])->name('category.list');
Route::get('/category/create',[CategoryController::class,'create_category'])->name('category.create');
Route::post('/category/store',[CategoryController::class,'store_category'])->name('category.store');
Route::get('/category/edit/{id}',[CategoryController::class,'edit_category'])->name('category.edit');
Route::put('/category/update/{id}',[CategoryController::class,'update_category'])->name('category.update');
Route::get('/category/delete/{id}',[CategoryController::class,'delete_category'])->name('category.delete');
//category route end here-------------------------------------------------------------------------------------->

// Subcategory route sart here---------------------------------------------------------------------------------->

Route::get('/subcategory/list',[SubCategoryController::class,'subcategory_list'])->name('subcategory.list');
Route::get('/subcategory/create',[SubCategoryController::class,'create_subcategory'])->name('subcategory.create');
Route::post('/subcategory/store',[SubCategoryController::class,'store_subcategory'])->name('subcategory.store');
Route::get('/subcategory/edit/{id}',[SubCategoryController::class,'edit_subcategory'])->name('subcategory.edit');
Route::put('/subcategory/update/{id}',[SubCategoryController::class,'update_subcategory'])->name('subcategory.update');
Route::get('/subcategory/delete/{id}',[SubCategoryController::class,'delete_subcategory'])->name('subcategory.delete');

//Subcategory route end here-------------------------------------------------------------------------------------->