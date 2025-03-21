<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('admin.items.index', compact('items'));
    }

    public function create()
    {
        return view('admin.items.create');
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'name' => 'required|string|max:100',
                'description' => 'nullable|string',
                'cost' => 'required|integer|min:0',
                'sell_value' => 'required|integer|min:0',
                'type' => 'required|in:Basic,Upgraded,Non-purchasable',
                'category' => 'required|in:Consumables,Attributes,Equipment,Miscellaneous,Secret Shop,Accessories,Support,Magical,Armor,Weapons,Armaments,Boss Rewards,Collectible Items',
            ]);
    
            // Pastikan sell_value tidak lebih besar dari cost
            if ($validated['sell_value'] > $validated['cost']) {
                return redirect()->back()->withErrors(['sell_value' => 'Sell Value tidak boleh lebih besar dari Cost.'])->withInput();
            }
    
            // Pisahkan data selain gambar
            $itemData = $request->except('image');
    
            // Handle image upload jika ada
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('items', 'public');
                $itemData['image'] = $imagePath;
            }
            // Simpan data item
            Item::create($itemData);
    
            return redirect()->route('items.index')->with('success', 'Item berhasil ditambahkan!');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan, silakan coba lagi.');
        }
    }
    
    public function show($id)
    {
        $item = Item::find($id);
        
        if (!$item) {
            return response()->json(['error' => 'Item not found'], 404);
        }
    
        return response()->json([
            'item' => $item
        ], 200);
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('admin.items.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        try {
            $item = Item::findOrFail($id);

            $validated = $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'name' => 'required|string|max:100',
                'description' => 'nullable|string',
                'cost' => 'required|integer|min:0',
                'sell_value' => 'required|integer|min:0',
                'type' => 'required|in:Basic,Upgraded,Non-purchasable',
                'category' => 'required|in:Consumables,Attributes,Equipment,Miscellaneous,Secret Shop,Accessories,Support,Magical,Armor,Weapons,Armaments,Boss Rewards,Collectible Items',
            ]);

            // Pastikan sell_value tidak lebih besar dari cost
            if ($validated['sell_value'] > $validated['cost']) {
                return redirect()->back()->withErrors(['sell_value' => 'Sell Value tidak boleh lebih besar dari Cost.'])->withInput();
            }

            // Simpan data kecuali gambar
            $itemData = $request->except('image');

            // Cek jika ada gambar baru yang diunggah
            if ($request->hasFile('image')) {
                // Hapus gambar lama jika ada
                if ($item->image && Storage::exists('public/' . $item->image)) {
                    Storage::delete('public/' . $item->image);
                }

                // Simpan gambar baru
                $imagePath = $request->file('image')->store('items', 'public');
                $itemData['image'] = $imagePath;
            }

            // Update data item
            $item->update($itemData);

            return redirect()->route('items.index')->with('success', 'Item berhasil diperbarui!');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan, silakan coba lagi.');
        }
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
    
        // Hapus gambar jika ada
        if ($item->image && Storage::exists('public/' . $item->image)) {
            Storage::delete('public/' . $item->image);
        }
    
        // Hapus item dari database
        $item->delete();
    
        return redirect()->route('items.index')->with('success', 'Item berhasil dihapus!');
    }    
    public function frontend(Request $request)
{
    // Ambil kategori dari query parameter, default ke 'Consumables' jika tidak ada
    $category = $request->query('category', 'Consumables');

    // Ambil semua kategori dari daftar yang sudah didefinisikan di database
    $categories = [
        'Consumables', 'Attributes', 'Equipment', 'Miscellaneous', 'Secret Shop',
        'Accessories', 'Support', 'Magical', 'Armor', 'Weapons', 'Armaments',
        'Boss Rewards', 'Collectible Items'
    ];

    // Pastikan kategori yang dipilih valid
    if (!in_array($category, $categories)) {
        abort(404, 'Kategori tidak ditemukan');
    }

    // Ambil item berdasarkan kategori yang dipilih
    $items = Item::where('category', $category)->get();

    return view('item', compact('items', 'category', 'categories'));
}



    public function showByName($name)
    {
    // Cari item berdasarkan nama (tanpa memperhatikan huruf besar/kecil)
    $item = Item::where('name', str_replace('-', ' ', $name))->firstOrFail();
    
    return view('item-detail', compact('item'));
    }

    
}
