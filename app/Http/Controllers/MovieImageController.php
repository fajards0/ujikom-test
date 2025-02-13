<?php

namespace App\Http\Controllers;

use App\Models\MovieImage;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieImageController extends Controller
{
    public function index()
    {
        $movieImages = MovieImage::with('movie')->latest()->get();
        return view('imagess.index', compact('movieImages'));
    }

    public function create()
    {
        $movies = Movie::all();
        return view('imagess.create', compact('movies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Simpan file gambar
        $imagePath = $request->file('image_url')->store('movie_images', 'public');

        MovieImage::create([
            'movie_id' => $request->movie_id,
            'image_url' => $imagePath,
        ]);

        return redirect()->route('images.index')->with('success', 'Gambar berhasil ditambahkan.');
    }

    public function show($id)
    {
        $movieImage = MovieImage::findOrFail($id);
        return view('imagess.show', compact('movieImage'));
    }

    public function edit($id)
    {
        $movieImage = MovieImage::findOrFail($id);
        $movies = Movie::all();
        return view('imagess.edit', compact('movieImage', 'movies'));
    }

    public function update(Request $request, $id)
    {
        $movieImage = MovieImage::findOrFail($id);

        $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Jika ada file baru di-upload
        if ($request->hasFile('image_url')) {
            // Hapus gambar lama jika ada
            if ($movieImage->image_url) {
                Storage::disk('public')->delete($movieImage->image_url);
            }
            // Simpan gambar baru
            $imagePath = $request->file('image_url')->store('movie_images', 'public');
            $movieImage->image_url = $imagePath;
        }

        // Update movie_id
        $movieImage->movie_id = $request->movie_id;
        $movieImage->save();

        return redirect()->route('images.index')->with('success', 'Gambar berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $movieImage = MovieImage::findOrFail($id);

        // Hapus gambar dari penyimpanan
        if ($movieImage->image_url) {
            Storage::disk('public')->delete($movieImage->image_url);
        }

        // Hapus data dari database
        $movieImage->delete();

        return redirect()->route('images.index')->with('success', 'Gambar berhasil dihapus.');
    }
}
