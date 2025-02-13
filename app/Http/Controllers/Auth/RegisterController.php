<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Redirect setelah registrasi.
     *
     * @return string
     */
    protected function redirectTo()
    {
        return Auth::user()->role === 'admin' ? route('admin.dashboard') : route('user.dashboard');
    }

    /**
     * Konstruktor: Hanya tamu yang bisa mengakses.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Validasi data pendaftaran.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Buat user baru setelah validasi berhasil.
     *
     * @param array $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'user', // Default role sebagai 'user'
        ]);
    }

    /**
     * Handle registrasi dan login otomatis setelah register.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        Auth::login($user); // Auto-login setelah registrasi

        return redirect($this->redirectTo());
    }
}
