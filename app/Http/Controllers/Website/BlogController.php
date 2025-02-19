<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::all();

        return view('website.blogs.index', compact( 'blogs',));
    }

    public function show(Blog $blog)
    {
        return view('website.blogs.show', compact('blog'));
    }
}
