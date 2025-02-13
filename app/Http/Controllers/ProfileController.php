<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view('profiles.index', compact('profiles'));
    }

    public function create()
    {
        $users = User::all(); // Ambil semua pengguna
        return view('profiles.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string',
            'birthdate' => 'nullable|date',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $profile = new Profile();
        $profile->user_id = Auth::id(); // Menggunakan user yang sedang login
        $profile->phone = $request->phone;
        $profile->address = $request->address;
        $profile->birthdate = $request->birthdate;

        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/profile_pictures', $filename);
            $profile->profile_picture = 'profile_pictures/' . $filename;
        }

        $profile->save();

        return redirect()->route('profiles.index')->with('success', 'Profil berhasil dibuat!');
    }

    public function show(Profile $profile)
    {
        return view('profiles.show', compact('profile'));
    }

    public function edit(Profile $profile)
    {
        return view('profiles.edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        // Pastikan user login
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string',
            'birthdate' => 'nullable|date',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Update nama user
        $user->name = $request->name;
        $user->save(); // Simpan perubahan ke tabel users

        // Update atau buat profil pengguna
        $profile = Profile::updateOrCreate(
            ['user_id' => $user->id],
            [
                'phone' => $request->phone,
                'address' => $request->address,
                'birthdate' => $request->birthdate,
            ]
        );

        // Upload foto profil jika ada
        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/profile_pictures', $filename);
            $profile->profile_picture = 'profile_pictures/' . $filename;
            $profile->save();
        }

        return redirect()->route('profiles.index')->with('success', 'Profil berhasil diperbarui!');
    }

    public function destroy(Profile $profile)
    {
        if ($profile->profile_picture) {
            Storage::disk('public')->delete($profile->profile_picture);
        }

        $profile->delete();

        return redirect()->route('profiles.index')->with('success', 'Profil berhasil dihapus.');
    }
}
