<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('adminlayout.dashboard'); // Sesuaikan dengan view admin Anda
    }

    public function user()
    {
        return view('hometemp'); // Sesuaikan dengan view user Anda
    }
}
