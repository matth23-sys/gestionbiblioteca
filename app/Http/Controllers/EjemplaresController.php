<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Ejemplar;
use App\Models\Libro;

class EjemplaresController extends Controller
{
    public function crear()
    {
        $libros = Libro::all();
        return view('ejemplares.crear', compact('libros'));
    }

public function store(Request $request)
{
    $request->validate([
        'libro_id' => 'required|exists:libros,id',
        'codigo' => 'required|unique:ejemplares,codigo',
        'estado' => 'required|in:Disponible,Prestado,Dañado',
    ]);

    $libro = Libro::find($request->libro_id);
    $ejemplaresActuales = $libro->ejemplares()->count();

    if ($ejemplaresActuales >= $libro->numero_ejemplares) {
        return back()->with('error', 'No se pueden agregar más ejemplares a este libro. Límite alcanzado.');
    }

    Ejemplar::create([
        'libro_id' => $request->libro_id,
        'codigo' => $request->codigo,
        'estado' => $request->estado,
    ]);

    return redirect()->route('ejemplares.leer')->with('success', 'Ejemplar creado correctamente.');
}


    public function leer()
    {
        $ejemplares = Ejemplar::with('libro')->get();
        return view('ejemplares.leer', compact('ejemplares'));
    }

    public function cambiarEstado(Ejemplar $ejemplar, Request $request)
    {
        $nuevoEstado = $request->input('estado');

        if ($nuevoEstado === 'Prestado' && $ejemplar->estado === 'Dañado') {
            return back()->with('error', 'No se puede prestar un ejemplar dañado.');
        }

        $ejemplar->estado = $nuevoEstado;
        $ejemplar->save();

        return back()->with('success', 'Estado actualizado.');
    }

    public function eliminar(Ejemplar $ejemplar)
    {
        $ejemplar->delete();
        return back()->with('success', 'Ejemplar eliminado.');
    }
}
