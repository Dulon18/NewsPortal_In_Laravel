<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function category_list()
    {
        $categories=DB::table('categories')->get();
        return view('backend.pages.category.category_list',compact('categories'));
    }
    public function create_category()
    {
        return view('backend.pages.category.create_category');
    }
    public function store_category(Request $request)
    {
        $request->validate([
            'category_en'=>'required',
            'category_bn'=>'required',

        ]);
        Category::create([
            'category_en'=>$request->category_en,
            'category_bn'=>$request->category_bn,
        ]);

        return redirect()->route('category.list');
    }
}
