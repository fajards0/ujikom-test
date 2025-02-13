<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Redirect setelah login.
     *
     * @var string
     */
    protected function redirectTo()
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            return route('admin.dashboard'); // Redirect ke admin dashboard
        } else {
            return route('user.dashboard'); // Redirect ke home untuk user
        }
    }

    /**
     * Konstruktor: Cegah akses login jika sudah login.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Method ini dijalankan setelah user berhasil login.
     */
    protected function authenticated(Request $request, $user)
    {
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard'); // Redirect admin ke dashboard
        } else {
            return redirect()->route('user.dashboard'); // Redirect user ke hometemp
        }
    }

    /**
     * Logout dan redirect ke login.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('status', 'Anda telah logout.');
    }
}
