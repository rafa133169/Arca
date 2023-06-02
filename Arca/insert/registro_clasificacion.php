<?php
//print_r($_POST);

$nombre_clasificacion2 = $_POST['nombre_clasificacion2'];

include('../connection/connection.php');

$consulta = "INSERT INTO clasificacion (nombre_clasificacion) VALUE ('$nombre_clasificacion2')";


$query = mysqli_query($conn, $consulta);

header('Location: ../clasificaciones.php');

?>