<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\District;
use App\Models\SubCategory;
use App\Models\SubDistrict;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Datatables;

class PostController extends Controller
{
    public function post_list()
    {
        if(request()->ajax())
        {
            return datatables()->of(DB::table('posts')->select('*'))
                ->addColumn('action',function ($row) {
                        $buttons = '<a href="' . route("post.edit", $row->id) . '" class="btn btn-sm btn-warning mx-3" >Edit</a>';
                        $buttons .= '<a href="' . route("post.delete", $row->id) . '" class="btn btn-sm btn-danger" >Delete</a>';
                        return $buttons;
                    })
                    ->make('true');
        }
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
    public function post_store(Request $request)
    {
        $request->validate([
            'cat_id'=>'required',
            'dist_id'=>'required'
        ]);
        //dd($request);
        $filename ='';
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $filename = date('Ymdhms') . '.' . $file->getclientOriginalExtension();
            $file->storeAs('public/postImages', $filename);
        }
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
            'image'=>$filename,
            'first_section'=>$request->first_section,
            'first_section_thumbnail'=>$request->first_section_thumbnail,
            'bigthumbnail'=>$request->bigthumbnail,
            'post_date'=>date('d-m-Y'),
            'post_month'=>date('F'),

        ]);
        return redirect()->back();
    }


    public function post_delete($id)
    {
        Post::find($id)->delete();
        return redirect()->back()->with('success','Delete successfully..');
    }

}
