@extends('layouts.admin')

@section('title', 'Edit Item')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Edit Item</h1>
<x-allert/>
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Item</h6>
    </div>
    <div class="card-body" style="max-height: 60vh; overflow-y: auto;">
        <div class="container">
            <form action="{{ route('items.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            
                <!-- Image -->
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/png, image/jpeg, image/jpg">
                    @if ($item->image)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" width="100">
                        </div>
                    @endif
                    @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            
                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $item->name) }}" required>
                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            
                <!-- Description -->
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description">{{ old('description', $item->description) }}</textarea>
                    @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            
                <!-- Cost -->
                <div class="mb-3">
                    <label for="cost" class="form-label">Cost</label>
                    <input type="number" class="form-control" id="cost" name="cost" value="{{ old('cost', $item->cost) }}" required min="0">
                    @error('cost') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            
                <!-- Sell Value -->
                <div class="mb-3">
                    <label for="sell_value" class="form-label">Sell Value</label>
                    <input type="number" class="form-control" id="sell_value" name="sell_value" value="{{ old('sell_value', $item->sell_value) }}" required min="0">
                    @error('sell_value') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            
                <!-- Type -->
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select class="form-control" id="type" name="type" required>
                        @foreach(['Basic', 'Upgraded', 'Non-purchasable'] as $type)
                            <option value="{{ $type }}" {{ old('type', $item->type) == $type ? 'selected' : '' }}>{{ $type }}</option>
                        @endforeach
                    </select>
                    @error('type') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            
                <!-- Category -->
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-control" id="category" name="category" required>
                        @foreach([
                            'Consumables', 'Attributes', 'Equipment', 'Miscellaneous', 'Secret Shop',
                            'Accessories', 'Support', 'Magical', 'Armor', 'Weapons', 'Armaments',
                            'Boss Rewards', 'Collectible Items'
                        ] as $category)
                            <option value="{{ $category }}" {{ old('category', $item->category) == $category ? 'selected' : '' }}>{{ $category }}</option>
                        @endforeach
                    </select>
                    @error('category') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            
                <!-- Submit & Cancel Buttons -->
                <button type="submit" class="btn btn-primary mt-4">Update Item</button>
                <a href="{{ route('items.index') }}" class="btn btn-secondary mt-4">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection