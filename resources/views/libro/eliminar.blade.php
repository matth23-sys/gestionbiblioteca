@extends('layouts.app')
@section('content')
   
    <div class="card-body">
    <h5 class="card-title">Eliminar un libro</h5>
<form action="{{ route('libros.destroy') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group mb-3">
        <label for="Idlibro">ID del libro:</label>
        <input type="text" id="Idlibro" name="Idlibro" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Eliminar</button>
</form>
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
        @if (session('error'))
    <div class="alert alert-success" role="alert">
        {{ session('error') }}
    </div>
    @endif

  </div>
</div>
@endsection