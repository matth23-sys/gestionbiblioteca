<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    
    <!-- Fuente elegante -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">

    <style>
      body {
        background-color: #f9f5ef; /* beige claro */
        font-family: 'Merriweather', serif;
      }

      .navbar {
        background-color: #7b4b27; /* marrón madera */
      }

      .navbar-brand,
      .nav-link {
        color: #fdf6e3 !important;
      }

      .nav-link:hover {
        color: #ffd369 !important; /* miel */
      }

      .btn-outline-success {
        color: #6f4e37;
        border-color: #6f4e37;
      }

      .btn-outline-success:hover {
        background-color: #a47148;
        color: #fff;
        border-color: #a47148;
      }

      .container {
        margin-top: 2rem;
      }

      .card {
        background-color: #fffaf3;
        border: 1px solid #e0d3c3;
        box-shadow: 0 0 10px rgba(163, 121, 92, 0.1);
      }

      h1, h2, h3 {
        color: #5a3e2b;
      }

      footer {
        background-color: #7b4b27;
        color: #fdf6e3;
        text-align: center;
        padding: 1rem;
        margin-top: 4rem;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="/home">Sistema de Gestión Bibliotecario</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="/libros/crear">Crear</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/libros/leer">Leer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/libros/eliminar">Eliminar</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="container">
      @yield('content')
    </div>

    <footer>
      <p>&copy; {{ date('Y') }} Biblioteca Central</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>
