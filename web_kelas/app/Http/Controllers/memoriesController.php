<?php

namespace App\Http\Controllers;

use App\Models\Memories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class memoriesController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'    => 'required|string|max:255',
            'category' => 'required|in:Kegiatan Sekolah,Study Tour,Bebas',
            'image'    => 'required|image|mimes:jpeg,png,jpg,webp|max:5120|dimensions:min_width=300,min_height=200',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Upload gambar ke Supabase Storage ( folder: memories )
            $response = Http::withHeaders([
                'apikey'        => env('SUPABASE_API_KEY'),
                'Authorization' => 'Bearer ' . env('SUPABASE_API_KEY'),
                'Content-Type'  => $file->getClientMimeType(),
            ])->withBody(
                file_get_contents($file->getRealPath()),
                $file->getClientMimeType()
            )->post(env('SUPABASE_URL') . '/storage/v1/object/' . env('SUPABASE_BUCKET') . '/memories/' . $fileName);

            if ($response->successful()) {
                // Ambil Full URL Publik dari Supabase
                $imagePath = env('SUPABASE_URL') . '/storage/v1/object/public/' . env('SUPABASE_BUCKET') . '/memories/' . $fileName;
            }
        }

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
