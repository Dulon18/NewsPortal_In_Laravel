<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post_list()
    {
        return view('backend.pages.post.post_list');
    }
}
