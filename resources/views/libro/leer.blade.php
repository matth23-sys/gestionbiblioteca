@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Listado de Libros</h1>

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Título</th>
                <th>Autor</th>
                <th>ISBN</th>
                <th>Categoría</th>
                <th>Ejemplares</th>
                <th>Portada</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($libros as $libro)
                <tr>
                    <td>{{ $libro->id }}</td>
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->autor }}</td>
                    <td>{{ $libro->isbn }}</td>
                    <td>{{ $libro->categoria }}</td>
                    <td>{{ $libro->numero_ejemplares }}</td>
<td>
    @if ($libro->imagen)
        <img src="{{ asset('storage/' . $libro->imagen) }}" alt="Portada" width="60">
    @else
        <span class="text-muted">Sin imagen</span>
    @endif
</td>

                    <td>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal{{ $libro->id }}">
                            Actualizar
                        </button>
                        @include('libro.actualizar', ['libro' => $libro])
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">No hay libros registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    @if (session('success'))
        <div class="alert alert-success mt-4" role="alert">
            {{ session('success') }}
        </div>
    @endif
</div>
@endsection
