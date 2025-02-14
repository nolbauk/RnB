<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    // public function create()
    // {
    //     return view('register');
    // }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'name' => 'nullable|string',
            'bio' => 'nullable|string',
            'birth' => 'nullable|date',
            'phone' => 'nullable|string',
            'profile_picture' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 1, // Default sebagai user
            'name' => $request->name,
            'bio' => $request->bio,
            'birth' => $request->birth,
            'phone' => $request->phone,
            'profile_picture' => $request->profile_picture,
        ]);

        return response()->json(['message' => 'User created successfully', 'user' => $user], 201);
    }

    public function destroy(){
        
    }
}