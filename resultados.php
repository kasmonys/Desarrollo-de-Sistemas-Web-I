<?php
$nombre = "";
$edad = "";
$ciudad = "";
$pasatiempo = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = htmlspecialchars(trim($_POST["nombre"] ?? ""), ENT_QUOTES, "UTF-8");
    $edad = htmlspecialchars(trim($_POST["edad"] ?? ""), ENT_QUOTES, "UTF-8");
    $ciudad = htmlspecialchars(trim($_POST["ciudad"] ?? ""), ENT_QUOTES, "UTF-8");
    $pasatiempo = htmlspecialchars(trim($_POST["pasatiempo"] ?? ""), ENT_QUOTES, "UTF-8");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Resultados de datos!</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="dive2">

        <h1>Resultados</h1>

        <img src="imagen.jpg" alt="Imagen de resultados">

        <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>

            <div id="datos">
                <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
                <p><strong>Edad:</strong> <?php echo $edad; ?> años</p>
                <p><strong>Ciudad:</strong> <?php echo $ciudad; ?></p>
                <p><strong>Pasatiempo favorito:</strong> <?php echo $pasatiempo; ?></p>
            </div>

            <h2>¡Bien Hecho!</h2>

            <button type="button" onclick="mostrarAlerta()">
                Ingresar otro registro
            </button>

        <?php else: ?>

            <p>No se recibieron datos. Regresa al formulario.</p>
            <a href="index.php">
                <button type="button">Regresar</button>
            </a>

        <?php endif; ?>

    </div>

    <!-- Ventana emergente -->
    <div id="modal" class="modal">
        <div class="modal-contenido">

            <div class="icono-pregunta">?</div>

            <h2>¿Deseas ingresar otro registro?</h2>

            <p>Serás redirigido al formulario de captura.</p>

            <button type="button" onclick="cerrarAlerta()">
                Cancelar
            </button>

            <button type="button" onclick="regresarFormulario()">
                Sí, regresar
            </button>

        </div>
    </div>

    <script src="app.js"></script>

</body>
</html>
