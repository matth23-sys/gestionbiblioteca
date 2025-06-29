<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Búsqueda de Biblioteca</title>
  <style>
    body {
      margin: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(to bottom, #d1e5ee, #89aabb);
      font-family: Arial, sans-serif;
    }

    .form-container {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      width: 400px;
      max-width: 90%;
    }

    .form-container h2 {
      margin-top: 0;
      color: #333;
    }

    .tabs {
      display: flex;
      margin-bottom: 15px;
      border-bottom: 1px solid #ccc;
    }

    .tab {
      padding: 10px 15px;
      cursor: pointer;
      border: none;
      background: none;
      font-weight: bold;
      color: #555;
    }

    .tab.active {
      color: #007baf;
      border-bottom: 3px solid #007baf;
    }

    .form-container select,
    .form-container input[type="text"] {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
    }

    .form-container button {
      width: 100%;
      padding: 12px;
      background-color: #009cde;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .form-container button:hover {
      background-color: #007bb2;
    }

    .subtitulo {
      font-style: italic;
      color: #444;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>

<div class="form-container">
  <h2>Búsquedas</h2>
  <div class="tabs">
    <button class="tab active">Colección impresa</button>
    <button class="tab">Recursos digitales</button>
    <button class="tab">Préstamo a domicilio</button>
  </div>

  <div class="subtitulo">Búsqueda en la colección impresa</div>

  <select>
    <option>Catálogo de biblioteca</option>
  </select>

  <input type="text" placeholder="Término a buscar...">

  <select>
    <option>Todas las bibliotecas</option>
  </select>

  <button>Buscar</button>
</div>

</body>
</html>
