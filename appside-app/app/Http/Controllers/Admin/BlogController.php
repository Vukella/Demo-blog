<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function show($id)
    {
        $blog = Blog::with('category', 'tags')->find($id);

        if (!$blog) {
            return response()->json(['error' => 'Blog not found'], 404);
        }

        return response()->json(['blog' => $blog]);
    }
         public function store(Request $request)
    {
        $validatedData = $request->validate(Blog::$rules);

        // Assuming 'category_id' and 'tag_ids' are part of the validated data
        $blog = Blog::create($validatedData);

        return response()->json(['blog' => $blog], 201);
    }

   public function update(Request $request, $id)
    {
        $validatedData = $request->validate(Blog::$rules);

        $blog = Blog::find($id);

        if (!$blog) {
            return response()->json(['error' => 'Blog not found'], 404);
        }

        // Assuming 'category_id' and 'tag_ids' are part of the validated data
        $blog->update($validatedData);

        return response()->json(['blog' => $blog]);
    }

}

?>
