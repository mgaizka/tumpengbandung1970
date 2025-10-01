<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class MenuTumpeng extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'jenis_paket',
        'card_desc',
        'desc',
        'harga',
        'kategori',
        'image',
        'image_alt',
    ];

    protected static function booted()
    {
        static::saved(function ($menu) {
            // Hapus cache global
            Cache::forget("menus.all");

            // Hapus cache kategori terkait
            if ($menu->kategori) {
                Cache::forget("menus.kategori." . $menu->kategori);
            }
        });

        static::deleted(function ($menu) {
            Cache::forget("menus.all");

            if ($menu->kategori) {
                Cache::forget("menus.kategori." . $menu->kategori);
            }
        });
    }
}
