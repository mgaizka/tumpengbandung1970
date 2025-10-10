<?php

namespace App\Http\Controllers;

use App\Models\MenuNasi;
use Illuminate\Http\Request;

class MenuNasiController extends Controller
{
    //
    // public function index(Request $request)
    // {
    //     $kategori = $request->query('kategori');
    //     $menus = $kategori
    //         ? MenuNasi::where('kategori', $kategori)->get()
    //         : MenuNasi::all();
    //     return view('MenuNasi', compact('menus', 'kategori'));
    // }

    public function index(Request $request)
    {
        $kategori = $request->query('kategori');

        if ($kategori == 'nasi-besek') {
            $menus = MenuNasi::where(function ($query) {
                $query->where('kategori', 'nasi-besek')
                    ->orWhere(function ($q) {
                        $q->where('kategori', 'nasi-bakar')
                            ->where('jenis_paket', '!=', 'Nasi Bakar');
                    });
            })->get();
        } elseif ($kategori) {
            $menus = MenuNasi::where('kategori', $kategori)->get();
        } else {
            $menus = MenuNasi::all();
        }

        return view('MenuNasi', compact('menus', 'kategori'));
    }
}
