<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // Nama tabel di database (opsional jika sesuai konvensi penamaan)
    protected $table = 'members';

    // Kolom yang diizinkan untuk diisi massal via form/request
    protected $fillable = [
        'nis',
        'name',
        'photo_path',
    ];

    /**
     * Accessor untuk mendapatkan URL lengkap foto profil.
     * Mengembalikan gambar placeholder default jika foto belum diunggah.
     */
    public function getPhotoUrlAttribute()
    {
        if ($this->photo_path && file_exists(public_path('storage/' . $this->photo_path))) {
            return asset('storage/' . $this->photo_path);
        }

        // Placeholder default jika tidak ada foto
        return 'https://placehold.co/300x400/0f172a/0ea5e9?text=' . urlencode($this->name);
    }
}
