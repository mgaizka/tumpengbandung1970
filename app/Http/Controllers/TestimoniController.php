<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    //
    public function index()
    {
        $events = Testimoni::all();
        return view('Testimoni', compact('events'));
    }
}
