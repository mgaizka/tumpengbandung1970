<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'judul',
        'sub_judul',
        'image',
        'image_alt',
        'desc',
    ];
}
