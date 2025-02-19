<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BlogResource;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return BlogResource::collection($blogs);
    }

    public function show(Blog $blog)
    {
        return new BlogResource($blog);
    }
}
