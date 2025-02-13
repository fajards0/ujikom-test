<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index()
{
    $favorites = Favorite::with('movie')->where('user_id', auth()->id())->paginate(10); // Gunakan paginate
    return view('favorites.index', compact('favorites'));
}


    public function store(Request $request)
    {
        $request->validate([
            'movie_id' => 'required|exists:movies,id',
        ]);

        // Cek apakah film sudah difavoritkan oleh user
        $exists = Favorite::where('user_id', Auth::id())
                          ->where('movie_id', $request->movie_id)
                          ->exists();

        if ($exists) {
            return redirect()->back()->with('warning', 'Film sudah ada di favorit.');
        }

        Favorite::create([
            'user_id' => Auth::id(),
            'movie_id' => $request->movie_id,
        ]);

        return redirect()->back()->with('success', 'Film ditambahkan ke favorit.');
    }

    public function destroy($id)
    {
        $favorite = Favorite::where('user_id', Auth::id())->findOrFail($id);
        $favorite->delete();

        return redirect()->back()->with('success', 'Film dihapus dari favorit.');
    }
}
