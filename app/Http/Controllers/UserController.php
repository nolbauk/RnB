<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->query('filter', 'active');
    
        if ($filter === 'deleted') {
            $users = User::onlyTrashed()->get();
        } else {
            $users = User::all();
        }
    
        return view('admin.users.index', compact('users', 'filter'));
    }
    
    public function profile() {
        $user = Auth::user(); // Ambil user yang sedang login
        return view('profile', compact('user'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }    

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'name' => 'nullable|string',
            'bio' => 'nullable|string',
            'birth' => 'nullable|date',
            'phone' => 'nullable|string|max:15',
            'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        // Proses upload foto jika ada
        $profilePicture = null;
        if ($request->hasFile('profile_picture')) {
            $profilePicture = $request->file('profile_picture')->store('profile_pictures', 'public');
        }
    
        // Simpan user ke database
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id, // Jika role bisa dipilih, gunakan: $request->role_id
            'name' => $request->name,
            'bio' => $request->bio,
            'birth' => $request->birth,
            'phone' => $request->phone,
            'profile_picture' => $profilePicture,
        ]);
    
        return redirect()->route('adminusers.index')->with('success', 'User berhasil ditambahkan');
    }
    

    public function show($id)
    {
        $user = User::with('role')->withTrashed()->find($id);
        
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }
    
        return response()->json([
            'user' => $user
        ], 200);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
    
        return view('admin.users.edit', compact('user', 'roles'));
    }
    
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
    
        $request->validate([
            'name' => 'nullable|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $id,
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:6|confirmed',
            'role_id' => 'required|exists:roles,id',
            'bio' => 'nullable|string',
            'birth' => 'nullable|date',
            'phone' => 'nullable|string|max:15',
            'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        // Update data user
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->bio = $request->bio;
        $user->birth = $request->birth;
        $user->phone = $request->phone;
    
        // Update password jika diisi
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
    
        // Update foto profil jika ada
        if ($request->hasFile('profile_picture')) {
            // Hapus foto lama jika ada
            if ($user->profile_picture) {
                Storage::disk('public')->delete($user->profile_picture);
            }
    
            // Simpan foto baru
            $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->profile_picture = $profilePicturePath;
        }
    
        $user->save();
    
        return redirect()->route('adminusers.index')->with('success', 'User berhasil diperbarui.');
    }
    

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete(); // Soft delete
    
        return redirect()->route('adminusers.index')->with('success', 'User berhasil dihapus');
    }

    public function restore($id)
    {
        $user = User::onlyTrashed()->findOrFail($id);
        $user->restore();
    
        return redirect()->route('adminusers.index')->with('success', 'User berhasil dikembalikan');
    }

    public function forceDelete($id)
    {
        $user = User::onlyTrashed()->findOrFail($id);
        $user->forceDelete(); // Hapus permanen dari database

        return redirect()->route('adminusers.index', ['filter' => 'deleted'])->with('success', 'User berhasil dihapus permanen.');
    }
}