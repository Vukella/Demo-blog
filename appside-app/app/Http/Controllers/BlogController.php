<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        return view('blogs.index',[
            'blogs' => Blog::latest()->filter(
                request(['category','authors'])
                )->paginate(10)->withQueryString()
        ]);
    }

    public function show(Blog $blog)
    {
        $categories = Category::all();
        $tags = Tag::all();
        
        return view('blogs.show',[
            'blog'=> $blog,
            'categories' => $categories,
            'tags' => $tags
            ]);
    }
}
