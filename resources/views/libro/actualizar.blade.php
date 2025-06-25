
<!-- Modal -->
<div class="modal fade" id="modal{{$libro->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">    Actualizar Libros</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('libros.update', $libro) }}">
    @csrf
    @method("PUT")

        <div class="form-group mb-3">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" value="{{ $libro->titulo }}" class="form-control" required>
    </div>

    <div class="form-group mb-3">
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" value="{{ $libro->autor }}" class="form-control" required>
    </div>

    <div class="form-group mb-3">
        <label for="isbn">ISBN:</label>
        <input type="text" id="isbn" name="isbn" value="{{ $libro->isbn }}" class="form-control" required>
    </div>

    <div class="form-group mb-3">
        <label for="categoria">Categoría:</label>
        <input type="text" id="categoria" name="categoria" value="{{ $libro->categoria }}" class="form-control" required>
    </div>

    <div class="form-group mb-3">
        <label for="numero_ejemplares">Número de Ejemplares:</label>
        <input type="number" id="numero_ejemplares" name="numero_ejemplares" value="{{ $libro->numero_ejemplares }}" class="form-control" required>
    </div>

    <div class="form-group mb-4">
        <label for="imagen">Portada del libro:</label>
        @if ($libro->imagen)
            <div class="mb-2">
                <img src="{{ asset('storage/' . $libro->imagen) }}" width="80">
            </div>
        @endif
        <input type="file" id="imagen" name="imagen" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Actualizar libro</button>
</form>

      </div>
      
    </div>
  </div>
</div>