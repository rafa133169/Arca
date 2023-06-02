<?php
//print_r($_POST);

$nombre_habitat2 = $_POST['nombre_habitat2'];

include('../connection/connection.php');

$consulta = "INSERT INTO habitat (nombre_habitat) VALUE ('$nombre_habitat2')";


$query = mysqli_query($conn, $consulta);

header('Location: ../habitates.php');

?>