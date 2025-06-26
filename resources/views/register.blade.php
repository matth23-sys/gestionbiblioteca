<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .card {
      border: none;
      border-radius: 1rem;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }
    .form-label {
      font-weight: 600;
    }
  </style>
</head>
<body>
  <div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="col-md-6">
      <div class="card p-4">
        <div class="card-body">
          <h2 class="text-center mb-4">Crear Cuenta</h2>
          @if (session('error'))
  <div class="alert alert-danger">
    {{ session('error') }}
  </div>
@endif

@if ($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif


          <form method="POST" action="{{ route('validar-registro') }}">
            @csrf

            <div class="mb-3">
              <label for="userInput" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="userInput" name="name" required autocomplete="off">
            </div>

            <div class="mb-3">
              <label for="emailInput" class="form-label">Email</label>
              <input type="email" class="form-control" id="emailInput" name="email" required autocomplete="off">
            </div>

            <div class="mb-3">
              <label for="passwordInput" class="form-label">Password</label>
              <input type="password" class="form-control" id="passwordInput" name="password" required>
            </div>

            <div class="mb-3">
              <label for="passwordConfirmation" class="form-label">Confirmar Password</label>
              <input type="password" class="form-control" id="passwordConfirmation" name="password_confirmation" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Registrarse</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
