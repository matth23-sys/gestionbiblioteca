@extends('layouts.app')
@section('content')
   
    <div class="card-body">
    <h5 class="card-title">Añadir un libro</h5>
<form action="{{ route('libros.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group mb-3">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" class="form-control" required>
    </div>

    <div class="form-group mb-3">
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" class="form-control" required>
    </div>

    <div class="form-group mb-3">
        <label for="isbn">ISBN:</label>
        <input type="text" id="isbn" name="isbn" class="form-control" required>
    </div>

    <div class="form-group mb-3">
        <label for="categoria">Categoría:</label>
        <input type="text" id="categoria" name="categoria" class="form-control" required>
    </div>

    <div class="form-group mb-3">
        <label for="numero_ejemplares">Número de Ejemplares:</label>
        <input type="number" id="numero_ejemplares" name="numero_ejemplares" class="form-control" required>
    </div>

    <div class="form-group mb-4">
        <label for="imagen">Portada del libro:</label>
        <input type="file" id="imagen" name="imagen" class="form-control" accept="image/*">
    </div>

    <button type="submit" class="btn btn-primary">Guardar libro</button>
</form>
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif

  </div>
</div>
@endsection