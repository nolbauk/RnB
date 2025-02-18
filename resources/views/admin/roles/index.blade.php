@extends('layouts.admin')

@section('title', 'Roles')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Data Roles</h1>
<x-allert/>
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <a href="{{ route('adminroles.create') }}" class="btn btn-success btn-sm">Tambah Role</a>
    </div>
    <div class="card-body" style="max-height: 60vh; overflow-y: auto;">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($roles as $role)
                        <tr>
                            <td>
                                {{ $role->name }} 
                                @if(in_array($role->name, ['admin', 'user']))
                                    <span class="badge badge-secondary">(Default Role)</span>
                                @endif
                            </td>
                            <td>
                                @if(!in_array($role->name, ['admin', 'user']))
                                    <a href="{{ route('adminroles.edit', $role->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('adminroles.destroy', $role->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus role ini?')">Hapus</button>
                                    </form>
                                @else
                                    <span class="text-muted">Tidak dapat diedit atau dihapus</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>                        
        </div>
    </div>
</div>
@endsection