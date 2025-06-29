@extends('layouts.ejemplar')

@section('content')
<div class="container">
    <h1 class="mb-4">Actualizar Ejemplar</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('ejemplares.update', $ejemplar->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="libro_id">Libro:</label>
            <select name="libro_id" id="libro_id" class="form-control" required>
                @foreach ($libros as $libro)
                    <option value="{{ $libro->id }}" {{ $ejemplar->libro_id == $libro->id ? 'selected' : '' }}>
                        {{ $libro->titulo }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-4">
            <label for="estado">Estado del ejemplar:</label>
            <select name="estado" id="estado" class="form-control" required>
                <option value="Disponible" {{ $ejemplar->estado == 'Disponible' ? 'selected' : '' }}>Disponible</option>
                <option value="Prestado" {{ $ejemplar->estado == 'Prestado' ? 'selected' : '' }}>Prestado</option>
                <option value="Dañado" {{ $ejemplar->estado == 'Dañado' ? 'selected' : '' }}>Dañado</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Actualizar ejemplar</button>
        <a href="{{ route('ejemplares.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
