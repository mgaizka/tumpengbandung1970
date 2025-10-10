<?php

namespace App\Http\Controllers;

use App\Models\MenuLainnya;
use Illuminate\Http\Request;

class MenuLainnyaController extends Controller
{
    //
    public function index(Request $request)
    {
        // Ambil parameter kategori dari query string (?kategori=mini)
        $kategori = $request->query('kategori');

        // Query data: filter jika kategori ada, jika tidak ambil semua
        $menus = $kategori
            ? MenuLainnya::where('kategori', $kategori)->get()
            : MenuLainnya::all();

        // Kirim ke view
        return view('MenuLainnya', compact('menus', 'kategori'));
    }
}
