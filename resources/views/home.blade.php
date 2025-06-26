<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Página privada</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f2f5;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 2cm;
    }
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
    }
    .header h2 {
      margin: 0;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="header border-bottom pb-3 mb-4">
      <h2>
        HOME
        @auth
          de {{ Auth::user()->name }}
        @endauth
      </h2>

      <!-- ✅ Botón funcional de salir -->
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Salir</button>
      </form>
    </div>

    <div class="content">
      <h4>Bienvenido a tu página privada</h4>
      <p>Este es el contenido principal del sistema. Aquí puedes mostrar menús, estadísticas, enlaces, etc.</p>

      <!-- Ejemplo de contenido adicional -->
      <div class="row mt-4">
        <div class="col-md-4">
          <div class="card shadow-sm mb-4">
            <div class="card-body">
              <h5 class="card-title">Módulo 1</h5>
              <p class="card-text">Contenido o funcionalidades que puedes ofrecer aquí.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm mb-4">
            <div class="card-body">
              <h5 class="card-title">Módulo 2</h5>
              <p class="card-text">Otra sección de tu sistema.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm mb-4">
            <div class="card-body">
              <h5 class="card-title">Módulo 3</h5>
              <p class="card-text">Contenido adicional que quieras mostrar.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</body>
</html>
