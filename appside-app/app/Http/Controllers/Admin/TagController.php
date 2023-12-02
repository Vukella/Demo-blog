<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TagRequest;
use App\Models\Tag;
use App\Models\Blog;
use App\Models\Category;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::with('blog', 'category')->get();
        return view('admin.tags.index', compact('tags'));
    }

    public function create()
    {
        $blogs = Blog::all();
        $categories = Category::all();
        return view('admin.tags.create', compact('blogs', 'categories'));
    }

    public function store(TagRequest $request)
    {
        $tag = Tag::create($request->validated());
        $tag->blogs()->attach($request->input('blogs'));
        return redirect()->route('admin.tags.index')->with('success', 'Tag created successfully.');
    }

    public function edit(Tag $tag)
    {
        $blogs = Blog::all();
        $categories = Category::all();
        return view('admin.tags.edit', compact('tag', 'blogs', 'categories'));
    }

    public function update(TagRequest $request, Tag $tag)
    {
        $tag->update($request->validated());
        $tag->blogs()->sync($request->input('blogs'));
        return redirect()->route('admin.tags.index')->with('success', 'Tag updated successfully.');
    }

    public function destroy(Tag $tag)
    {
        $tag->blogs()->detach();
        $tag->delete();
        return redirect()->route('admin.tags.index')->with('success', 'Tag deleted successfully.');
    }
}


?>

