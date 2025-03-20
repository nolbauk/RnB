@extends('layouts.admin')

@section('title', 'Items')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Data Items</h1>
    <x-allert/>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <a href="{{ route('items.create') }}" class="btn btn-success btn-sm">Tambah Item</a>
        </div>
        <div class="card-body" style="max-height: 60vh; overflow-y: auto;">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#itemDetailsModal" onclick="showItemDetails('{{ $item->id }}')">Details</button>
                                <a href="{{ route('items.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('items.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus item ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="2" class="text-center">Data kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal item details -->
    <div class="modal fade" id="itemDetailsModal" tabindex="-1" role="dialog" aria-labelledby="itemDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="itemDetailsModalLabel">Item Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="itemDetails">
                        <!-- Item details will be loaded here via JavaScript -->
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
    function showItemDetails(itemId) {
        $.ajax({
            url: '/admin/items/' + itemId,
            method: 'GET',
            success: function(response) {
                var item = response.item;
                var detailsHtml = `
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">${item.name}</h4>
                            <div class="text-center mb-3">
                                <img src="/storage/${item.image}" alt="${item.name}" class="img-fluid img-thumbnail" style="max-width: 150px;">
                            </div>
                            <div class="table-bordered mb-3 p-2">
                                <h5>General Information</h5>
                                <p><strong>Type:</strong> ${item.type}</p>
                                <p><strong>Category:</strong> ${item.category}</p>
                                <p><strong>Cost:</strong> ${item.cost}</p>
                                <p><strong>Sell Value:</strong> ${item.sell_value}</p>
                            </div>
                            <div class="table-bordered mb-3 p-2">
                                <h5>Description</h5>
                                <p>${item.description || 'No description available'}</p>
                            </div>
                        </div>
                    </div>
                `;
                $('#itemDetails').html(detailsHtml);
                $('#itemDetailsModal').modal('show');
            },
            error: function(xhr, status, error) {
                alert('Error fetching item details');
            }
        });
    }
</script>

@endpush