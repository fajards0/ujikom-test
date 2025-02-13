<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\MovieCast;
use Illuminate\Http\Request;

class MovieCastController extends Controller
{
    /**
     * Tampilkan daftar cast berdasarkan film.
     */
    public function index()
    {
        $casts = MovieCast::with('movie')->latest()->get();
        return view('casts.index', compact('casts'));
    }

    /**
     * Tampilkan form tambah cast.
     */
    public function create()
    {
        $movies = Movie::all();
        return view('casts.create', compact('movies'));
    }

    /**
     * Simpan cast baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
        ]);

        MovieCast::create($request->all());

        return redirect()->route('casts.index')->with('success', 'Pemeran berhasil ditambahkan.');
    }

    public function show(MovieCast $cast)
    {
        return view('casts.show', compact('cast'));
    }

    /**
     * Tampilkan form edit cast.
     */
    public function edit(MovieCast $cast)
    {
        $movies = Movie::all();
        return view('casts.edit', compact('cast', 'movies'));
    }

    /**
     * Perbarui data cast.
     */
    public function update(Request $request, MovieCast $cast)
    {
        $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
        ]);

        $cast->update($request->all());

        return redirect()->route('casts.index')->with('success', 'Pemeran berhasil diperbarui.');
    }

    /**
     * Hapus cast.
     */
    public function destroy(MovieCast $cast)
    {
        $cast->delete();
        return redirect()->route('casts.index')->with('success', 'Pemeran berhasil dihapus.');
    }
}
