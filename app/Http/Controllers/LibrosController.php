<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Libro;

class LibrosController extends Controller
{
    public function crear()
    {
        return view('libro.crear');
    }



    public function leer()
    {
        $libros = Libro::all();
        return view('libro.leer', compact('libros'));
    }

public function store(Request $request)
{
    $request->validate([
        'titulo' => 'required|string|max:255',
        'autor' => 'required|string|max:255',
        'isbn' => 'required|string|max:100|unique:libros',
        'categoria' => 'required|string|max:100',
        'numero_ejemplares' => 'required|integer|min:1',
        'imagen' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $libro = new Libro();
    $libro->titulo = $request->titulo;
    $libro->autor = $request->autor;
    $libro->isbn = $request->isbn;
    $libro->categoria = $request->categoria;
    $libro->numero_ejemplares = $request->numero_ejemplares;

    if ($request->hasFile('imagen')) {
        //storage/app/public/portadas
        $path = $request->file('imagen')->store('portadas', 'public');
        $libro->imagen = $path;
    }

    $libro->save();

    return redirect()->back()->with('success', 'Libro registrado correctamente.');
}


 
public function update(Request $request, $id)
{
    $libro = Libro::findOrFail($id);

    $request->validate([
        'titulo' => 'required|string|max:255',
        'autor' => 'required|string|max:255',
        'isbn' => 'required|string|max:100|unique:libros,isbn,' . $libro->id,
        'categoria' => 'required|string|max:100',
        'numero_ejemplares' => 'required|integer|min:1',
        'imagen' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    
    $libro->titulo = $request->titulo;
    $libro->autor = $request->autor;
    $libro->isbn = $request->isbn;
    $libro->categoria = $request->categoria;
    $libro->numero_ejemplares = $request->numero_ejemplares;

    
    if ($request->hasFile('imagen')) {
        
        if ($libro->imagen) {
            Storage::disk('public')->delete($libro->imagen);
        }
        
        $path = $request->file('imagen')->store('portadas', 'public');
        $libro->imagen = $path;
    }

    $libro->save();

    return redirect()->back()->with('success', 'Libro actualizado correctamente.');
}
    public function eliminar()
    {
        $libros = Libro::all();
        return view('libro.eliminar', compact('libros'));
    }


public function destroy(Request $request){
$Id = $request->input('Idlibro');
$libro = Libro:: find($Id);
if($libro){
$libro->delete();
return redirect()->back()->with( 'success', 'Libro borrado con éxito!');
}else{
return redirect()->back()->with('error', 'Libro no encontrado');
}
}





} 
