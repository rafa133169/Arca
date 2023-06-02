<?php
    print_r($_POST);

    $nombre_animal = $_POST['nombre_animal'];
    $descripcion = $_POST['descripcion'];
    $id_clasificacion = $_POST['id_clasificacion'];
    $id_habitat = $_POST['id_habitat'];
    $id_alimentacion = $_POST['id_alimentacion'];

    include('../connection/connection.php');

    $consulta = "INSERT INTO animal (nombre_animal,descripcion_animal,id_clasificacion_id,id_alimentacion_id,id_habitat_id)
    VALUE ('$nombre_animal ','$descripcion','$id_clasificacion','$id_alimentacion','$id_habitat')";

    $query = mysqli_query($conn,$consulta);

    header('Location: ../animales.php');
?>