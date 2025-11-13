<?php  session_start(); ?>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Interfaz con Menú, Encabezado y Pie</title>
  <link rel="stylesheet" href="css/estiloinicio.css">
</head>
<body>
    <div class="navbar-top">
        <h2>PLATAFORMA DE ASESORÍAS</h2>
    </div>

    <div class="navbar-tabs">
    <a href="../../index.php" style="text-decoration: none; color: inherit;">
        <div>CETIS 17</div>
    </a>
    <div>CONFIGURACIONES</div>
    <div>NOTICIAS</div>
    <div>ACTUALIZACIONES</div>
    <div>REPORTAR PROBLEMA</div>

    </div>

    <div class="container">
    <!-- LADO IZQUIERDO -->
    <div class="sidebar">
        <a href="../vistas/inicio.php">INICIO</a>
        <a href="../vistas/agenda.php">AGENDA</a>
        <a href="../vistas/asesorias.php">ASESORÍAS</a>
        <div class="dropdown">
            <a href="#" onclick="toggleDropdown(event)">BIBLIOTECA</a>
            <div class="dropdown-content" id="dropdownContent">
                <a href="../vistas/biblioteca.php">Materia 1</a>
                <a href="#">Materia 2</a>
                <a href="#">Materia 3</a>
            </div>
        </div>
    </div>
</body>
</html>
