<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

//oi

class RoleController extends Controller
{
    public function index()
    {
        // fix
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|unique:roles|max:255'
        ]);

        Role::create([
            'name' => $request->name
        ]);

        return redirect()->route('roles.index')->with('success', 'Role berhasil ditambahkan');
    }

    public function edit(Role $adminrole)
    {
        if (in_array($adminrole->name, ['admin', 'user'])) {
            return redirect()->route('roles.index')->with('error', 'Role ini tidak bisa diedit!');
        }
    
        return view('admin.roles.edit', compact('adminrole'));
    }

    public function update(Request $request, Role $adminrole)
    {
        if (in_array($adminrole->name, ['admin', 'user'])) {
            return redirect()->route('roles.index')->with('error', 'Role ini tidak bisa diubah!');
        }
    
        $request->validate([
            'name' => 'required|string|unique:roles,name,' . $adminrole->id . '|max:255'
        ]);
    
        $adminrole->update([
            'name' => $request->name
        ]);
    
        return redirect()->route('roles.index')->with('success', 'Role berhasil diperbarui');
    }
    

    public function destroy($id) {
        $role = Role::findOrFail($id);
    
        if (in_array($role->name, ['admin', 'user'])) {
            return redirect()->route('roles.index')->with('error', 'Role ini tidak bisa dihapus!');
        }
    
        $role->delete();
    
        return redirect()->route('roles.index')->with('success', 'Role berhasil dihapus!');
    }
    
    
}
