<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\DB;
use App\Models\SubDistrict;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubDistrictController extends Controller
{
    public function subdistrict_list()
    {
        $subdistricts = DB::table('sub_districts')
        ->join('districts', 'sub_districts.district_id', 'districts.id')
        ->select('districts.district_en', 'districts.district_bn', 'sub_districts.*')
        ->get();
        return view('backend.pages.subdistrict.subdistrict_list', compact('subdistricts'));
    }
    public function create_subdistrict()
    {
        $districts = DB::table('districts')->get();
        return view('backend.pages.subdistrict.create_subdistrict',compact('districts'));
    }
    public function store_subdistrict(Request $request)
    {
        $request->validate([
            'subdistrict_en' => 'required|unique:sub_districts|max:255',
            'subdistrict_bn' => 'required|unique:sub_districts|max:255',

        ], [
            'subdistrict_en.required' => ' Sub District English Name is required',
            'subdistrict_bn.required' => ' Sub District Bangla Name is required',
            'unique' => ' District Name is already taken'
        ]);
        SubDistrict::create([
            'subdistrict_en' => $request->subdistrict_en,
            'subdistrict_bn' => $request->subdistrict_bn,
            'district_id' => $request->district_id,
        ]);

        return redirect()->route('subdistrict.list')->with('success', 'Added Successfully..');
    }
    public function edit_subdistrict($id)
    {
        $subdistrict = SubDistrict::find($id);
        $districts = DB::table('districts')->get();
        return view('backend.pages.subdistrict.edit_subdistrict', compact('subdistrict','districts'));
    }
    public function update_subdistrict(Request $request, $id)
    {

        $district = SubDistrict::find($id);
        $district->update([
            'subdistrict_en' => $request->subdistrict_en,
            'subdistrict_bn' => $request->subdistrict_bn,
            'district_id' => $request->district_id,
        ]);
        return redirect()->route('subdistrict.list')->with('success', 'Update Successfully..');
    }

    public function delete_subdistrict($id)
    {
        SubDistrict::find($id)->delete();
        return redirect()->route('subdistrict.list')->with('success', 'Delete Successfully..');
    }
}
