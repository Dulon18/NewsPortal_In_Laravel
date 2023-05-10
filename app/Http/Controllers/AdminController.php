<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.layouts.app');
    }
     public function dashboard()
    {
        return view('backend.layouts.dashboard');
    }
    public function main()
    {
        return view('backend.layouts.main');
    }
}
