<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro; // Asegúrate de importar tu modelo

class HomeController extends Controller
{
    /**
     * Muestra la vista principal del home con los libros.
     */
    public function index()
    {
        // Obtener todos los libros
        $libros = Libro::all();

        // Retornar la vista del home con los datos
        return view('home', compact('libros'));
    }
}
