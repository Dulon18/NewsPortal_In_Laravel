<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;
use Illuminate\Support\Facades\DB;
class DistrictController extends Controller
{
    public function district_list()
    {
        $districts = DB::table('districts')->get();
        return view('backend.pages.district.district_list', compact('districts'));
    }
    public function create_district()
    {
        return view('backend.pages.district.create_district');
    }
    public function store_district(Request $request)
    {
        $request->validate([
            'district_en' => 'required|unique:districts|max:255',
            'district_bn' => 'required|unique:districts|max:255',

        ], [
            'district_en.required' => ' District English Name is required',
            'district_bn.required' => ' District Bangla Name is required',
            'unique' => ' District Name is already taken'
        ]);
        District::create([
            'district_en' => $request->district_en,
            'district_bn' => $request->district_bn,
        ]);

        return redirect()->route('district.list')->with('success', 'Added Successfully..');
    }
    public function edit_district($id)
    {
        $district = District::find($id);
        return view('backend.pages.district.edit_district', compact('district'));
    }
    public function update_district(Request $request, $id)
    {

        $district = District::find($id);
        $district->update([
            'district_en' => $request->district_en,
            'district_bn' => $request->district_bn,
        ]);
        return redirect()->route('district.list')->with('success', 'Update Successfully..');
    }

    public function delete_district($id)
    {
        District::find($id)->delete();
        return redirect()->route('district.list')->with('success', 'Delete Successfully..');
    }
}
