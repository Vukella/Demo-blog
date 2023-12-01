<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return response()->json(['categories' => $categories]);
    }

    public function show($id)
    {
        $category = Category::with('blogs')->find($id);

        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }

        return response()->json(['category' => $category]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(Category::$rules);

        $category = Category::create($validatedData);

        return response()->json(['category' => $category], 201);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate(Category::$rules);

        $category = Category::find($id);

        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }

        $category->update($validatedData);

        return response()->json(['category' => $category]);
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }

        $category->delete();

        return response()->json(['message' => 'Category deleted']);
    }
}

?>
