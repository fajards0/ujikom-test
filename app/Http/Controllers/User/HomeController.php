<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $movies = Movie::with('genres')->inRandomOrder()->limit(5)->get(); // Ambil 5 film secara acak
        return view('hometemp', compact('movies'));
    }

    public function animedetail()
    {
        return view('anime_detail');
    }
}
