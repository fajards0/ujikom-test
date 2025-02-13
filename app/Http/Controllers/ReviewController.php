<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with('movie', 'user')->latest()->paginate(10);
        return view('reviews.index', compact('reviews'));
    }

    public function create()
    {
        $movies = Movie::all(); // Ambil semua film
        return view('reviews.create', compact('movies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'rating' => 'required|numeric|min:0|max:5',
            'comment' => 'required|string',
        ]);

        Review::create([
            'movie_id' => $request->movie_id,
            'user_id' => Auth::id(), // Gunakan user yang sedang login
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return redirect()->route('reviews.index')->with('success', 'Review berhasil ditambahkan.');
    }

    public function show(Review $review)
    {
        return view('reviews.show', compact('review'));
    }

    public function edit(Review $review)
    {
        $movies = Movie::all();
        return view('reviews.edit', compact('review', 'movies'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'rating' => 'required|numeric|min:1|max:5',
            'comment' => 'required|string',
        ]);

        $review = Review::findOrFail($id);

        // Pastikan hanya pemilik ulasan yang bisa mengedit
        if ($review->user_id !== Auth::id()) {
            return redirect()->route('reviews.index')->with('error', 'Anda tidak dapat mengedit ulasan ini.');
        }

        // Perbaiki update field yang sesuai dengan database
        $review->rating = $request->rating;
        $review->comment = $request->comment; // Harusnya 'comment', bukan 'review_text'

        // Simpan perubahan
        $review->save();

        return redirect()->route('reviews.index')->with('success', 'Ulasan berhasil diperbarui.');
    }


    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('reviews.index')->with('success', 'Review berhasil dihapus.');
    }
}
