@extends('layouts.ejemplar')

@section('content')
<div class="container mt-4">
    <h2>Crear Ejemplar</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif


    <form action="{{ route('ejemplares.store') }}" method="POST">
        @csrf

<div class="mb-3">
    <label for="libro_id" class="form-label">Libro:</label>
    <select name="libro_id" class="form-select" required>
        @foreach($libros as $libro)
            @php
                $ejemplares_actuales = $libro->ejemplares->count();
                $disponibles = $libro->numero_ejemplares - $ejemplares_actuales;
            @endphp
            <option value="{{ $libro->id }}">
                {{ $libro->titulo }} (ID: {{ $libro->id }}) - Disponibles: {{ $disponibles }}
            </option>
        @endforeach
    </select>
</div>


        <div class="mb-3">
            <label for="codigo" class="form-label">Código del ejemplar:</label>
            <input type="text" name="codigo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado:</label>
            <select name="estado" class="form-select">
                <option>Disponible</option>
                <option>Prestado</option>
                <option>Dañado</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('ejemplares.leer') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
