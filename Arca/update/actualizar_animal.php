<?php
print_r($_POST);

$id_animal = $_POST['id_animal'];
$nombre_animal = $_POST['nombre_animal'];
$descripcion = $_POST['descripcion'];
$id_clasificacion = $_POST['id_clasificacion'];
$id_alimentacion = $_POST['id_alimentacion'];
$id_habitat = $_POST['id_habitat'];

include('../connection/connection.php');


$consulta = "UPDATE animal SET nombre_animal = '$nombre_animal', 
 descripcion_animal = '$descripcion', id_clasificacion_id = '$id_clasificacion',id_alimentacion_id='$id_alimentacion',id_habitat_id='$id_habitat' 
 WHERE id_animal = '$id_animal'";

$query = mysqli_query($conn, $consulta);

header('Location: ../animales.php');
?>