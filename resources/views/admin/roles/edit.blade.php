@extends('layouts.admin')

@section('title', 'Roles')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Edit Data Role</h1>
<x-allert/>
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Edit Role</h6>
    </div>
    <div class="card-body" style="max-height: 60vh; overflow-y: auto;">
        <div class="container">
            <form action="{{ route('adminroles.update', $adminrole->id) }}" method="POST">
                @csrf
                @method('PUT')   

                <div class="mb-3">
                    <label for="name" class="form-label">Nama Role</label>
                    <input type="text" class="form-control" id="name" name="name" 
                        value="{{ old('name', $adminrole->name) }}" required>
                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <button type="submit" class="btn btn-primary mt-4">Simpan Perubahan</button>
                <a href="{{ route('adminroles.index') }}" class="btn btn-secondary mt-4">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection