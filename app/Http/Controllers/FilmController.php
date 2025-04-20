<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        return Film::with('genres')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'release_year' => 'required|integer',
            'rating' => 'required|numeric',
            'genre_ids' => 'required|array'
        ]);

        $film = Film::create($request->only(['title', 'description', 'release_year', 'rating']));
        $film->genres()->sync($request->genre_ids);

        return response()->json($film->load('genres'), 201);
    }

    public function show($id)
    {
        return Film::with('genres')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $film = Film::findOrFail($id);
        $film->update($request->only(['title', 'description', 'release_year', 'rating']));

        if ($request->has('genre_ids')) {
            $film->genres()->sync($request->genre_ids);
        }

        return response()->json($film->load('genres'));
    }

    public function destroy($id)
    {
        $film = Film::findOrFail($id);
        $film->genres()->detach();
        $film->delete();

        return response()->json(['message' => 'Film deleted']);
    }
}
