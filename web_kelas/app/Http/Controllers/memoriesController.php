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

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();

            $supabaseUrl = env('SUPABASE_URL');
            $supabaseKey = env('SUPABASE_API_KEY');
            $supabaseBucket = env('SUPABASE_BUCKET');

            // Upload ke Supabase
            $response = Http::withHeaders([
                'apikey'        => $supabaseKey,
                'Authorization' => 'Bearer ' . $supabaseKey,
                'Content-Type'  => $file->getClientMimeType(),
            ])->withBody(
                file_get_contents($file->getRealPath()), 
                $file->getClientMimeType()
            )->post("{$supabaseUrl}/storage/v1/object/{$supabaseBucket}/memories/{$fileName}");

            // Cek jika upload gagal
            if ($response->failed()) {
                return redirect()->back()->withErrors(['image' => 'Gagal mengunggah gambar ke Supabase: ' . $response->body()]);
            }

            $imagePath = "{$supabaseUrl}/storage/v1/object/public/{$supabaseBucket}/memories/{$fileName}";

            Memories::create([
                'title'      => $validated['title'],
                'category'   => $validated['category'],
                'image_path' => $imagePath,
            ]);

            return redirect()->back()->with('success', 'Foto memories berhasil diunggah!');
        }

        return redirect()->back()->withErrors(['image' => 'File gambar tidak ditemukan.']);
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
