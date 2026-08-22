<?php

namespace App\Http\Controllers;

use App\Models\Memories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class memoriesController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'    => 'required|string|max:255',
            'category' => 'required|in:Kegiatan Sekolah,Study Tour,Bebas',
            'image'    => 'required|image|mimes:jpeg,png,jpg,webp|max:5120|dimensions:min_width=300,min_height=200',
        ]);

        $imagePath = $request->file('image')->store('memories', 'public');

        Memories::create([
            'title'      => $validated['title'],
            'category'   => $validated['category'],
            'image_path' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Foto memories berhasil diunggah!');
    }

    public function destroy($id)
    {
        $memory = Memories::findOrFail($id);
        if ($memory->image_path) {
            Storage::disk('public')->delete($memory->image_path);
        }
        $memory->delete();

        return redirect()->back()->with('success', 'Foto memories berhasil dihapus!');
    }
}
