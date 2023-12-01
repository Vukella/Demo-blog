<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();

        return response()->json(['tags' => $tags]);
    }

    public function show($id)
    {
        $tag = Tag::with('blogs')->find($id);

        if (!$tag) {
            return response()->json(['error' => 'Tag not found'], 404);
        }

        return response()->json(['tag' => $tag]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(Tag::$rules);

        $tag = Tag::create($validatedData);

        return response()->json(['tag' => $tag], 201);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate(Tag::$rules);

        $tag = Tag::find($id);

        if (!$tag) {
            return response()->json(['error' => 'Tag not found'], 404);
        }

        $tag->update($validatedData);

        return response()->json(['tag' => $tag]);
    }

    public function destroy($id)
    {
        $tag = Tag::find($id);

        if (!$tag) {
            return response()->json(['error' => 'Tag not found'], 404);
        }

        $tag->delete();

        return response()->json(['message' => 'Tag deleted']);
    }
}

?>

