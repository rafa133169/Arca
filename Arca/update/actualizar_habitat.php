<?php
print_r($_POST);

$nombre_habitat = $_POST['nombre_habitates'];
$id_habitat = $_POST['id_habitat'];

include('../connection/connection.php');

$consulta = "UPDATE habitat SET nombre_habitat = '$nombre_habitat' WHERE id_habitat = '$id_habitat'";

$query = mysqli_query($conn,$consulta);
 
header('Location: ../habitates.php');


?>