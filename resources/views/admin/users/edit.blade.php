@extends('layouts.admin')

@section('title', 'Users')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Data Users</h1>
<x-allert/>
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data User</h6>
    </div>
    <div class="card-body" style="max-height: 60vh; overflow-y: auto;">
        <div class="container">
            <form action="{{ route('adminusers.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Upload Foto Profil -->
                <div class="mb-3">
                    <label for="profile_picture" class="form-label">Foto Profil</label>
                    <input type="file" class="form-control" id="profile_picture" name="profile_picture" accept="image/*">
                    @if ($user->profile_picture)
                        <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Picture" class="img-thumbnail mt-2" width="100">
                    @endif
                    @error('profile_picture') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            
                <!-- Nama User -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nama User</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            
                <!-- Username -->
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ old('username', $user->username) }}" required>
                    @error('username') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            
                <!-- Password (Opsional) -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password (Biarkan kosong jika tidak ingin diubah)</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            
                <!-- Confirm Password -->
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>
            
                <!-- Role (Dropdown) -->
                <div class="mb-3">
                    <label for="role_id" class="form-label">Role</label>
                    <select class="form-control" id="role_id" name="role_id" required>
                        <option value="" disabled>Pilih Role</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                        @endforeach
                    </select>
                    @error('role_id') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            
                <!-- Bio -->
                <div class="mb-3">
                    <label for="bio" class="form-label">Bio</label>
                    <textarea class="form-control" id="bio" name="bio">{{ old('bio', $user->bio) }}</textarea>
                    @error('bio') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            
                <!-- Tanggal Lahir -->
                <div class="mb-3">
                    <label for="birth" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="birth" name="birth" value="{{ old('birth', $user->birth) }}">
                    @error('birth') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            
                <!-- Nomor Telepon -->
                <div class="mb-3">
                    <label for="phone" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $user->phone) }}">
                    @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            
                <!-- Tombol Simpan & Batal -->
                <button type="submit" class="btn btn-primary mt-4">Update User</button>
                <a href="{{ route('adminusers.index') }}" class="btn btn-secondary mt-4">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection