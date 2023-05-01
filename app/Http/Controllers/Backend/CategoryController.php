<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category_list()
    {
        return view('backend.pages.category.category_list');
    }
    public function create_category()
    {
        return view('backend.pages.category.create_category');
    }
}
