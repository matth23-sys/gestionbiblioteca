<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibrosUController extends Controller
{
    public function leer()
    {
        $libros = Libro::all();

        return view('libro.leer', compact('libros'));
    }
}
