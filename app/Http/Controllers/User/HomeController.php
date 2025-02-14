<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;
use App\Models\Genre;

class HomeController extends Controller
{
    public function index()
    {
        $featuredMovie = Movie::with(['genres', 'casts'])->inRandomOrder()->first(); // Film utama
        $topRatedMovies = Movie::with('genres')
        ->orderByDesc('rating') // Urutkan berdasarkan rating tertinggi
        ->take(4) // Ambil 4 film dengan rating tertinggi
        ->get();
        $genres = Genre::all();

        return view('home', compact('featuredMovie', 'topRatedMovies', 'genres'));
    }

    public function animedetail()
    {
        return view('anime_detail');
    }
}
