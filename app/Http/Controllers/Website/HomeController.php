<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        return view('home', compact( 'blogs',));
    }
}
