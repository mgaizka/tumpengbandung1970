<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuNasi extends Model
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
}
