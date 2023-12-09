<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminBlogController extends Controller
{
    public function index()
    {
        return view('admin.blogs.index', [
            'posts' => Blog::paginate(50)
        ]);
    }
    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store()
    {
        Blog::create(array_merge($this->validateBlog(), [
            'user_id' => request()->user()->id,
            'thumbnail' => request()->file('thumbnail')->store('thumbnails')
        ]));
        return redirect('/');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', ['blogs' => $blog]);
    }

    public function update(Blog $blog)
    {
        $attributes = $this->validateBlog($blog);

        if($attributes['thumbnail'] ?? false){
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $blog->update($attributes);

        return back()->with('success','Blog updated!');
    }
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return back()->with('success','Blog deleted!');
    }

    protected function validateBlog(?Blog $blog = null): array
    {
        $blog ??= new Blog();

        return request()->validate([
            'title' => 'reuqired',
            'thumbnail' => $blog-> exists ? ['image'] : ['required', 'image'],
            'slug' => ['required', Rule::unique('blogs','slug')->ignore($blog)],
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'tag_id' => ['required', Rule::exists('tags','id')]
            ]);
    }
}
