<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibrosUController extends Controller
{
    // Método para mostrar la lista de libros
    public function leer()
    {
        // Obtener todos los libros desde la base de datos
        $libros = Libro::all();

        // Retornar la vista con los datos
        return view('libro.leer', compact('libros'));
    }
}
