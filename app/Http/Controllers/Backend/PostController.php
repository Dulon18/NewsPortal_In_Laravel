<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
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
    public function store(Request $request)
    {
        Post::create([
            'title_en'=>$request->title_en,
            'title_bn'=>$request->title_bn,
            'cat_id'=>$request->cat_id,
            'subcat_id'=>$request->subcat_id,
            'dist_id'=>$request->dist_id,
            'subdist_id'=>$request->subdist_id,
            'details_en'=>$request->details_en,
            'details_bn'=>$request->details_bn,
            'tags_bn'=>$request->tags_bn,
            'tags_en'=>$request->tags_en,
            'headline'=>$request->headline,
            'first_section'=>$request->first_section,
            'first_section_thumbnail'=>$request->first_section_thumbnail,
            'bigthumbnail'=>$request->bigthumbnail,
            'post_date'=>$request->post_date,
            'post_month'=>$request->post_month,

        ]);
        return redirect()->back();
    }
}
