<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memories extends Model
{
    use HasFactory;

    protected $table = 'memories';

    protected $fillable = [
        'title',
        'category',
        'image_path',
        'is_featured',
    ];

    // Mengubah tipe data 'is_featured' menjadi boolean secara otomatis
    protected $casts = [
        'is_featured' => 'boolean',
    ];

    /**
     * Accessor untuk mendapatkan URL foto galeri lengkap.
     */
    public function getImageUrlAttribute()
    {
        if ($this->image_path && file_exists(public_path('storage/' . $this->image_path))) {
            return asset('storage/' . $this->image_path);
        }

        return 'https://placehold.co/600x400/1e293b/94a3b8?text=' . urlencode($this->title);
    }
}
