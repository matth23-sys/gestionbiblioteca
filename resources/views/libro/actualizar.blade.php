
<!-- Modal -->
<div class="modal fade" id="modal{{$libro->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">    Actualizar Libros</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('libros.update', $libro) }}" enctype="multipart/form-data">
    
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

<div class="form-group mb-3">
        <label for="imagen">Portada actual:</label><br>
        @if ($libro->imagen)
            <img src="{{ asset('storage/' . $libro->imagen) }}" alt="Portada" width="80" class="mb-2">
        @else
            <p class="text-muted">Sin imagen</p>
        @endif
        <input type="file" name="imagen" id="imagen" class="form-control mt-2" accept="image/*">
    </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>

    <button type="submit" class="btn btn-primary">Actualizar libro</button>
</form>

      </div>
      
    </div>
  </div>
</div>