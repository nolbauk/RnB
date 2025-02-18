@extends('layouts.admin')

@section('title', 'Users')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Data Users</h1>
    <x-allert/>
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <a href="{{ route('adminusers.create') }}" class="btn btn-success btn-sm">Tambah User</a>
            <div>
                <a href="{{ route('adminusers.index', ['filter' => 'active']) }}" class="btn btn-primary btn-sm {{ $filter === 'active' ? 'active' : '' }}">User Aktif</a>
                <a href="{{ route('adminusers.index', ['filter' => 'deleted']) }}" class="btn btn-secondary btn-sm {{ $filter === 'deleted' ? 'active' : '' }}">User Dihapus</a>
            </div>
        </div>
        <div class="card-body" style="max-height: 60vh; overflow-y: auto;">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                            <tr>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ optional($user->role)->name ?? 'Tidak ada role' }}</td>
                                <td>
                                    @if ($filter === 'deleted')
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#userDetailsModal" onclick="showUserDetails('{{ $user->id }}')">Details</button>
                                        <form action="{{ route('adminusers.restore', $user->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-warning btn-sm">Restore</button>
                                        </form>
                                    @else
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#userDetailsModal" onclick="showUserDetails('{{ $user->id }}')">Details</button>
                                        {{-- <a href="{{ route('adminheroes.edit', $hero->id) }}" class="btn btn-warning btn-sm">Edit</a> --}}
                                        <form action="{{ route('adminusers.destroy', $user->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus user ini?')">Hapus</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Data kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal user details -->
    <div class="modal fade" id="userDetailsModal" tabindex="-1" role="dialog" aria-labelledby="userDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="userDetailsModalLabel">User Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="userDetails">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    function showUserDetails(userId) {
        $.ajax({
            url: '/adminusers/' + userId,
            method: 'GET',
            success: function(response) {
                var user = response.user;
                var deletedAt = user.deleted_at ? new Date(user.deleted_at) : null;
                
                // Format deleted_at hanya menampilkan tanggal, bulan, dan tahun
                var deletedAtFormatted = deletedAt ? deletedAt.toLocaleDateString('id-ID') : 'N/A';

                var detailsHtml = `
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">${user.name}</h4>
                            <div class="text-center mb-3">
                                <img src="/storage/${user.profile_picture}" alt="${user.name}" class="img-fluid img-thumbnail" style="max-width: 250px;">
                            </div>

                            <div class="table-bordered mb-3 p-2">
                                <h5 class="text-center">General Information</h5>
                                <p><strong>Username:</strong> ${user.username}</p>
                                <p><strong>Email:</strong> ${user.email}</p>
                                <p><strong>Phone:</strong> ${user.phone || 'N/A'}</p>
                                <p><strong>Birth Date:</strong> ${user.birth || 'N/A'}</p>
                                <p><strong>Bio:</strong> ${user.bio || 'N/A'}</p>
                            </div>

                            <div class="table-bordered mb-3 p-2">
                                <h5 class="text-center">Role</h5>
                                <p><strong>Role:</strong> ${user.role.name}</p>
                            </div>

                            <div class="table-bordered mb-3 p-2">
                                <h5 class="text-center">Account Status</h5>
                                <p><strong>Deleted At:</strong> ${deletedAtFormatted}</p>
                            </div>
                        </div>
                    </div>
                `;

                $('#userDetails').html(detailsHtml); // Menampilkan detail user di elemen dengan id 'userDetails'
                $('#userDetailsModal').modal('show'); // Menampilkan modal
            },
            error: function(xhr, status, error) {
                alert('Error fetching user details');
            }
        });
    }
</script>
@endpush