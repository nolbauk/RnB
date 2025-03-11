<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = User::find(Auth::id());

        // Validasi input
        $request->validate([
            'name' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'birth' => 'nullable|date',
            'phone' => 'nullable|string|max:15',
            'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Update data profil
        $user->name = $request->name;
        $user->bio = $request->bio;
        $user->birth = $request->birth;
        $user->phone = $request->phone;

        // Jika ada gambar yang diunggah
        if ($request->hasFile('profile_picture')) {
            // Hapus gambar lama jika ada
            if ($user->profile_picture) {
                Storage::disk('public')->delete($user->profile_picture);
            }

            // Simpan gambar baru
            $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->profile_picture = $profilePicturePath;
        }

        // Simpan perubahan ke database
        $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }
}