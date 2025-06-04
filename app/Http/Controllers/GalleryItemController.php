<?php

namespace App\Http\Controllers;

use App\Models\Item; // Tambahkan ini
use Illuminate\Http\Request;

class GalleryItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('item', compact('items'));
    }
    public function show($id)
    {
        $item = Item::findOrFail($id);
        return view('item-detail', compact('item'));
    }

}
