<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-size: 1.1rem;
    }
    .form-container {
      margin-top: 3%;
      max-width: 550px; /* AUMENTADO: antes 400px */
      padding: 40px;
      background: white;
      border-radius: 15px;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }
    .form-label {
      font-size: 1rem;
    }
    .btn {
      font-size: 1.1rem;
      padding: 0.75rem;
    }
  </style>
</head>
<body>

  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="form-container">
      <h3 class="text-center mb-4">Iniciar sesión</h3>

      @if (session('success'))
        <div class="alert alert-success mt-2" role="alert">
          {{ session('success') }}
        </div>
      @endif

       @if (session('error'))
        <div class="alert alert-danger mt-2" role="alert">
          {{ session('error') }}
        </div>
      @endif

      <form method="POST" action="{{ route('inicia-sesion') }}">
        @csrf

        <!-- Email -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="email" id="emailInput" name="email" class="form-control form-control-lg" required />
          <label class="form-label" for="emailInput">Correo electrónico</label>
        </div>

        <!-- Password -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="password" id="passwordInput" name="password" class="form-control form-control-lg" required />
          <label class="form-label" for="passwordInput">Contraseña</label>
        </div>

        <!-- Checkbox -->
        <div class="form-check d-flex justify-content-center mb-4">
          <input class="form-check-input me-2" type="checkbox" id="rememberCheck" name="remember" />
          <label class="form-check-label" for="rememberCheck">
            Mantener sesión iniciada
          </label>
        </div>

        <!-- Submit -->
        <div class="d-grid mb-4">
          <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">
            Acceder
          </button>
        </div>

        <!-- Register link -->
        <div class="text-center">
          <p>¿No tienes cuenta? <a href="{{ route('registro') }}">Regístrate</a></p>
        </div>
      </form>
    </div>
  </div>

  <!-- MDB JS -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
</body>
</html>
