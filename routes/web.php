<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\DistrictController;
use App\Http\Controllers\Backend\SubDistrictController;
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

//category route start here---------------------------------------------------------------------------------->
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

//Districts route start here---------------------------------------------------------------------------------->
Route::get('/district/list',[DistrictController::class,'district_list'])->name('district.list');
Route::get('/district/create',[DistrictController::class,'create_district'])->name('district.create');
Route::post('/district/store',[DistrictController::class,'store_district'])->name('district.store');
Route::get('/district/edit/{id}',[DistrictController::class,'edit_district'])->name('district.edit');
Route::put('/district/update/{id}',[DistrictController::class,'update_district'])->name('district.update');
Route::get('/district/delete/{id}',[DistrictController::class,'delete_district'])->name('district.delete');
//Districts route end here-------------------------------------------------------------------------------------->

// SubDistricts route start here---------------------------------------------------------------------------------->

Route::get('/subdistrict/list',[SubDistrictController::class,'subdistrict_list'])->name('subdistrict.list');
Route::get('/subdistrict/create',[SubDistrictController::class,'create_subdistrict'])->name('subdistrict.create');
Route::post('/subdistrict/store',[SubDistrictController::class,'store_subdistrict'])->name('subdistrict.store');
Route::get('/subdistrict/edit/{id}',[SubDistrictController::class,'edit_subdistrict'])->name('subdistrict.edit');
Route::put('/subdistrict/update/{id}',[SubDistrictController::class,'update_subdistrict'])->name('subdistrict.update');
Route::get('/subdistrict/delete/{id}',[SubDistrictController::class,'delete_subdistrict'])->name('subdistrict.delete');

//Subcategory route end here------------------------------------------------------------------------------------------->

//post route satrt
Route::get('/post/list', [PostController::class, 'post_list'])->name('post.list');
Route::get('/post/create', [PostController::class, 'post_create'])->name('post.create');
//post route end