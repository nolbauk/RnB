<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
    

    public function create()
    {
        $roles = \App\Models\Role::all();
        return view('admin.users.create', compact('roles'));
    }    

    public function store(Request $request) {
        $request->validate([
            'username' => 'required|string|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'name' => 'nullable|string',
            'bio' => 'nullable|string',
            'birth' => 'nullable|date',
            'phone' => 'nullable|string',
            'profile_picture' => 'nullable|string',
        ]);
    
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 2,
            'name' => $request->name,
            'bio' => $request->bio,
            'birth' => $request->birth,
            'phone' => $request->phone,
            'profile_picture' => $request->profile_picture,
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
    
}