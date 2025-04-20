<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        return response()->json(Genre::all());
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|unique:genres,name']);

        $genre = Genre::create([
            'name' => $request->name,
        ]);

        return response()->json(['message' => 'Genre added', 'data' => $genre], 201);
    }

    public function update(Request $request, $id)
    {
        $genre = Genre::findOrFail($id);
        $request->validate(['name' => 'required|string|unique:genres,name,' . $id]);

        $genre->update([
            'name' => $request->name,
        ]);

        return response()->json(['message' => 'Genre updated', 'data' => $genre]);
    }
}
