<?php
require('conexion.php');

if (!empty($_POST['nombre']) and !empty($_POST['correo']) and !empty($_POST['genero']) and !empty($_POST['contrasena']) and !empty($_POST['comentario']) and !empty($_POST['ciudad']))
{
    if (isset($_POST['interesa-contratarte'])) {
        $valorCheckbox = "Sí";
    } else {
        $valorCheckbox = "No";
    }

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $genero = $_POST['genero'];
    $contra = $_POST['contrasena'];
    $comentario = $_POST['comentario'];
    $ciudad = $_POST['ciudad'];

    $sql = "INSERT INTO usuarios (nombre, correo, genero, contrasena, comentario, ciudad, meinte) VALUES ('$nombre', '$correo', '$genero', '$contra', '$comentario', '$ciudad', '$valorCheckbox')";
            
    // Utilizar exec() dado que no se regresan resultados
    $conn->exec($sql);

    header('Location: index.php');
}
else
{
    echo"Error";
}

?>