<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SubCategory;
class SubCategoryController extends Controller
{
    public function subcategory_list()
    {
        $subcategories = DB::table('sub_categories')
        ->join('categories','sub_categories.category_id','categories.id')
        ->select('categories.category_en','categories.category_bn', 'sub_categories.*')
        ->get();
        return view('backend.pages.subcategory.subcategory_list', compact('subcategories'));
    }
    public function create_subcategory()
    {
        $categories = DB::table('categories')->get();
        return view('backend.pages.subcategory.create_subcategory',compact('categories'));
    }
    public function store_subcategory(Request $request)
    {
        //dd($request);
        // $request->validate([
        //     'subcategory_en' => 'required|unique:subcategories|max:255',
        //     'subcategory_bn' => 'required|unique:subcategories|max:255',
        //     'category' => 'required',

        // ], [
        //     'subcategory_en.required' => ' SubCategory English Name is required',
        //     'subcategory_bn.required' => ' SubCategory Bangla Name is required',
        //     'category.required' => 'Choose one option',
        //     'unique' => ' Sub Category Name is already taken'
        // ]);
        SubCategory::create([
            'subcategory_en' => $request->subcategory_en,
            'subcategory_bn' => $request->subcategory_bn,
            'category_id' => $request->category_id,
        ]);


        return redirect()->route('subcategory.list')->with('success', 'Added Successfully..');
    }
}
