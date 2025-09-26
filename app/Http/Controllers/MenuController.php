<?php

namespace App\Http\Controllers;

use App\Models\MenuTumpeng;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function index(Request $request)
    {
        // Ambil query string ?kategori=xxx
        $kategori = $request->query('kategori');

        // Filter jika kategori ada, kalau tidak ambil semua
        $menus = $kategori
            ? MenuTumpeng::where('kategori', $kategori)->get()
            : MenuTumpeng::all();

        // Kirim data ke view
        return view('MenuTumpeng', compact('menus', 'kategori'));
    }
}
