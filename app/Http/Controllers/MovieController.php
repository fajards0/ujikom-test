<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('genres')->get();
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('movies.create', compact('genres'));
    }

    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'release_date' => 'required|date',
            'duration' => 'required|integer',
            'rating' => 'nullable|numeric|min:0|max:10',
            'poster' => 'nullable|image|max:2048',
            'trailer_url' => 'nullable|url',
            'genres' => 'required|array'
        ]);

        // Generate slug dari title
        $slug = Str::slug($request->title);

        // Simpan movie data
        $movie = new Movie();
        $movie->title = $request->title;
        $movie->slug = $slug;
        $movie->description = $request->description;
        $movie->release_date = $request->release_date;
        $movie->duration = $request->duration;
        $movie->rating = $request->rating;
        $movie->trailer_url = $request->trailer_url;

        // Simpan poster jika ada
        if ($request->hasFile('poster')) {
            $posterPath = $request->file('poster')->store('posters', 'public');
            $movie->poster = $posterPath;
        }

        $movie->save();
        $movie->genres()->attach($request->genres);

        return redirect()->route('movies.index')->with('success', 'Movie created successfully.');
    }

    public function edit(Movie $movie)
    {
        $genres = Genre::all();
        return view('movies.edit', compact('movie', 'genres'));
    }

    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'release_date' => 'required|date',
            'duration' => 'required|integer',
            'rating' => 'nullable|numeric|min:0|max:10',
            'poster' => 'nullable|image|max:2048',
            'trailer_url' => 'nullable|url',
            'genres' => 'required|array'
        ]);

        // Update slug berdasarkan title baru
        $movie->slug = Str::slug($request->title);
        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->release_date = $request->release_date;
        $movie->duration = $request->duration;
        $movie->rating = $request->rating;
        $movie->trailer_url = $request->trailer_url;

        // Update poster jika ada file baru
        if ($request->hasFile('poster')) {
            // Hapus poster lama jika ada
            if ($movie->poster) {
                Storage::disk('public')->delete($movie->poster);
            }
            // Simpan poster baru
            $posterPath = $request->file('poster')->store('posters', 'public');
            $movie->poster = $posterPath;
        }

        $movie->save();
        $movie->genres()->sync($request->genres);

        return redirect()->route('movies.index')->with('success', 'Movie updated successfully.');
    }

    public function destroy(Movie $movie)
    {
        // Hapus poster jika ada
        if ($movie->poster) {
            Storage::disk('public')->delete($movie->poster);
        }

        $movie->delete();
        return redirect()->route('movies.index')->with('success', 'Movie deleted successfully.');
    }
}
