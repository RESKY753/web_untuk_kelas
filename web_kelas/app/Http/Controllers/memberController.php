<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
class memberController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'nis'   => 'required|string|max:50|unique:members,nis',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048|dimensions:min_width=100,min_height=100',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Upload gambar ke Supabase Storage via REST API
            $response = Http::withHeaders([
                'apikey'        => env('SUPABASE_API_KEY'),
                'Authorization' => 'Bearer ' . env('SUPABASE_API_KEY'),
                'Content-Type'  => $file->getClientMimeType(),
            ])->withBody(
                file_get_contents($file->getRealPath()),
                $file->getClientMimeType()
            )->post(env('SUPABASE_URL') . '/storage/v1/object/' . env('SUPABASE_BUCKET') . '/members/' . $fileName);

            if ($response->successful()) {
                // Mengambil URL publik gambar dari Supabase
                $photoPath = env('SUPABASE_URL') . '/storage/v1/object/public/' . env('SUPABASE_BUCKET') . '/members/' . $fileName;
            }
        }

        Member::create([
            'name'       => $validated['name'],
            'nis'        => $validated['nis'],
            'photo_path' => $photoPath,
        ]);

        return redirect()->back()->with('success', 'Anggota kelas berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        if ($member->photo_path) {
            Storage::disk('public')->delete($member->photo_path);
        }
        $member->delete();

        return redirect()->back()->with('success', 'Anggota kelas berhasil dihapus!');
    }
}
