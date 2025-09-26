<?php

namespace App\Http\Controllers;

use App\Models\MenuNasi;
use Illuminate\Http\Request;

class MenuNasiController extends Controller
{
    //
    public function index(Request $request)
    {
        // Ambil query string ?kategori=xxx
        $kategori = $request->query('kategori');

        // Filter jika kategori ada, kalau tidak ambil semua
        $menus = $kategori
            ? MenuNasi::where('kategori', $kategori)->get()
            : MenuNasi::all();

        // Kirim data ke view
        return view('MenuNasi', compact('menus', 'kategori'));
    }
}
