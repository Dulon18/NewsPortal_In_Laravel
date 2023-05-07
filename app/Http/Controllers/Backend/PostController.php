<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\District;
use App\Models\SubCategory;
use App\Models\SubDistrict;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post_list()
    {
        return view('backend.pages.post.post_list');
    }
    public function post_create()
    {
        $categories=Category::all();
        $subcategories=SubCategory::all();
        $districts=District::all();
        $subdistricts=SubDistrict::all();
        return view('backend.pages.post.create_post',compact('categories', 'subcategories', 'districts', 'subdistricts'));
    }
}
