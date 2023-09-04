<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
    <div class="nav">
        <a href="index2.php">Inicio</a>
        <a href="index.php">Formulario</a>
    </div>

    <header>
        <h1>Contacto</h1>
    </header>

    <form method="POST" action="store.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required><br>

        <label>Género:</label>
        <input type="radio" id="genero-masculino" name="genero" value="masculino">
        <label for="genero-masculino">Masculino</label>
        <input type="radio" id="genero-femenino" name="genero" value="femenino">
        <label for="genero-femenino">Femenino</label><br>

        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contrasena" required><br>

        <label for="comentario">Comentario:</label>
        <textarea id="comentario" name="comentario" rows="4" cols="25"></textarea><br>

        <label for="ciudad">Ciudad:</label>
        <select id="ciudad" name="ciudad" required>
            <option value="Guadalajara">Guadalajara</option>
            <option value="Zapopan">Zapopan</option>
            <option value="Tonalá">Tonalá</option>
            <option value="Otra">Otra</option>
        </select><br>

        <input type="checkbox" id="interesa-contratarte" name="interesa-contratarte">
        <label for="interesa-contratarte">Me interesa contratarte</label><br>

        <button type="submit">Enviar</button>
    </form>

    <form method="post">
        <button type="submit" name="buscar">Imprimir registros</button>
    </form>

    <?php
    
    require('conexion.php');

    if (isset($_POST['buscar'])) {

        $sql = "SELECT * FROM usuarios";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // Configura los resultados como un arreglo asociativo
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        
        // $stmt->fetchAll() Obtiene el arreglo asociativo
        echo "<ul>";
        foreach ($stmt->fetchAll() as $row) {
            echo "<li>" . $row['Id'] . " - " . $row['nombre'] . " " . $row['correo'] . " " . $row['genero'] . " " . $row['contrasena'] . " " . $row['comentario'] . " " . $row['ciudad'] . " " . $row['meinte'] ."</li>";
        }
        echo "</ul>";
    }
    ?>

</body>
</html>