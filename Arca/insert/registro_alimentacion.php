<?php
//print_r($_POST);

$tipo_alimento2 = $_POST['tipo_alimento2'];

include('../connection/connection.php');

$consulta = "INSERT INTO alimentacion (tipo_alimento) VALUE ('$tipo_alimento2')";


$query = mysqli_query($conn, $consulta);

header('Location: ../alimentaciones.php');

?>