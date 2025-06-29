@extends('layouts.ejemplar')

@section('content')
<div class="container mt-4">
    <h2>Listado de Ejemplares</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <a href="{{ route('ejemplares.crear') }}" class="btn btn-success mb-3">Agregar nuevo ejemplar</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Libro</th>
                <th>Código</th>
                <th>Estado</th>
                <th>Actualizar Estado</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ejemplares as $ejemplar)
                <tr>
                    <td>{{ $ejemplar->id }}</td>
                    <td>{{ $ejemplar->libro->titulo }}</td>
                    <td>{{ $ejemplar->codigo }}</td>
                    <td>{{ $ejemplar->estado }}</td>

                    <!-- Formulario para cambiar estado -->
                    <td>
                        <form action="{{ route('ejemplares.estado', $ejemplar->id) }}" method="POST" class="d-flex">
                            @csrf
                            <select name="estado" class="form-select me-2">
                                <option value="Disponible" {{ $ejemplar->estado == 'Disponible' ? 'selected' : '' }}>Disponible</option>
                                <option value="Prestado" {{ $ejemplar->estado == 'Prestado' ? 'selected' : '' }}>Prestado</option>
                                <option value="Dañado" {{ $ejemplar->estado == 'Dañado' ? 'selected' : '' }}>Dañado</option>
                            </select>
                            <button class="btn btn-primary btn-sm">Actualizar</button>
                        </form>
                    </td>

                    <!-- Formulario para eliminar -->
                    <td>
                        <form action="{{ route('ejemplares.eliminar', $ejemplar->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este ejemplar?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
