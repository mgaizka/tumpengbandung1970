<?php

namespace App\Http\Controllers;

use App\Models\MenuTumpeng;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class MenuController extends Controller
{
    //
    public function index(Request $request)
    {
        $kategori = $request->query('kategori');
        $cacheKey = $kategori ? "menus.kategori.$kategori" : "menus.all";

        // Cache 1 bulan
        $menus = Cache::remember($cacheKey, 60 * 60 * 24 * 30, function () use ($kategori) {
            return MenuTumpeng::query()
                ->when($kategori, fn($q) => $q->where('kategori', $kategori))
                ->select(['id', 'jenis_paket', 'card_desc', 'desc', 'harga', 'kategori', 'image', 'image_alt'])
                ->get();
        });

        return view('MenuTumpeng', compact('menus', 'kategori'));
    }
}
