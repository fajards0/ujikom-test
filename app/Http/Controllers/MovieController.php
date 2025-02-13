<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    /**
     * Tampilkan daftar film.
     */
    public function index()
    {
        $movies = Movie::with('genre')->latest()->get();
        return view('movies.index', compact('movies'));
    }

    /**
     * Tampilkan form tambah film.
     */
    public function create()
    {
        $genres = Genre::all();
        return view('movies.create', compact('genres'));
    }

    /**
     * Simpan film baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:movies',
            'slug' => 'required|string|max:255|unique:movies',
            'description' => 'required',
            'release_date' => 'required|date',
            'duration' => 'required|integer|min:1',
            'rating' => 'nullable|numeric|min:0|max:10',
            'genre_id' => 'required|exists:genres,id',
            'poster' => 'nullable|image|max:2048',
            'trailer_url' => 'nullable|url',
        ]);

        Movie::create([
            'title' => $request->title,
            'slug' => Str::slug($request->slug), // Gunakan slug yang dikirim dari input
            'description' => $request->description,
            'release_date' => $request->release_date,
            'duration' => $request->duration,
            'rating' => $request->rating ?? 0,
            'genre_id' => $request->genre_id,
            'poster' => $request->file('poster') ? $request->file('poster')->store('posters', 'public') : null,
            'trailer_url' => $request->trailer_url,
        ]);

        return redirect()->route('movies.index')->with('success', 'Film berhasil ditambahkan.');
    }


    /**
     * Tampilkan detail film.
     */
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    /**
     * Tampilkan form edit film.
     */
    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        $genres = Genre::all(); // Mengambil semua genre untuk dropdown
        return view('movies.edit', compact('movie', 'genres'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:movies,slug,' . $id,
            'genre_id' => 'required|exists:genres,id',
            'description' => 'required|string',
            'release_date' => 'required|date',
            'duration' => 'required|integer|min:1',
            'rating' => 'required|numeric|min:0|max:10',
            'poster' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'trailer_url' => 'nullable|url',
        ]);

        $movie = Movie::findOrFail($id);
        $movie->title = $request->title;
        $movie->slug = $request->slug;
        $movie->genre_id = $request->genre_id;
        $movie->description = $request->description;
        $movie->release_date = $request->release_date;
        $movie->duration = $request->duration;
        $movie->rating = $request->rating;
        $movie->trailer_url = $request->trailer_url;

        if ($request->hasFile('poster')) {
            // Hapus poster lama jika ada
            if ($movie->poster) {
                Storage::delete('public/' . $movie->poster);
            }
            $posterPath = $request->file('poster')->store('posters', 'public');
            $movie->poster = $posterPath;
        }

        $movie->save();

        return redirect()->route('movies.index')->with('success', 'Film berhasil diperbarui!');
    }



    /**
     * Hapus film.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index')->with('success', 'Film berhasil dihapus.');
    }
}
