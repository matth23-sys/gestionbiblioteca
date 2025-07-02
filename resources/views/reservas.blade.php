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

    
    .reserva-container {
      max-width: 900px;
      margin: 0 auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .reserva-header {
      text-align: center;
      margin-bottom: 30px;
    }

    .reserva-header h2 {
      margin: 0;
      font-size: 28px;
      color: #333;
    }

    .reserva-form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .reserva-form label {
      font-weight: bold;
      color: #555;
    }

    .reserva-form input,
    .reserva-form select {
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 15px;
    }

    .reserva-form button {
      margin-top: 20px;
      padding: 14px;
      background-color: #007baf;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    .reserva-form button:hover {
      background-color: #005f8e;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="header border-bottom pb-3 mb-4">
      <h2>
        Bienvenido(a) a tu panel de reservas
        @auth
          de {{ Auth::user()->name }}
        @endauth
      </h2>

      
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Salir</button>
      </form>
    </div>

    
      
      <div class="reserva-container mt-5">
        <div class="reserva-header">
          <h2>Reserva de Libros</h2>
          <p>Solicita tu ejemplar desde nuestra plataforma</p>
        </div>

        <form class="reserva-form">
          <label for="titulo">Título del libro</label>
          <input type="text" id="titulo" placeholder="Ej. Cien Años de Soledad" required />

          <label for="autor">Autor</label>
          <input type="text" id="autor" placeholder="Ej. Gabriel García Márquez" required />

          <label for="biblioteca">Selecciona biblioteca</label>
          <select id="biblioteca">
            <option>Biblioteca Central</option>
            <option>Biblioteca de Ciencias</option>
            <option>Biblioteca Infantil</option>
          </select>

          <label for="fecha">Fecha de retiro</label>
          <input type="date" id="fecha" required />

          <button type="submit">Reservar</button>
        </form>
      </div>

    </div>
  </div>
</body>
</html>
