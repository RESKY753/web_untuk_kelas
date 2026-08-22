<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class memberController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'nis'   => 'required|string|max:50|unique:members,nis', // Pengecekan unik pada tabel 'members'
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048|dimensions:min_width=100,min_height=100',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('members', 'public');
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
