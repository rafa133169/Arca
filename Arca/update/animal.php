
<!doctype html>
<html lang="en">

<head>
  <title>animal</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>

  <?php

//print_r($_GET);
$id_animal = $_GET['id_animal'];
include('../connection/connection.php');

$consulta2 = "SELECT animal.id_animal,animal.descripcion_animal AS Descripcion, animal.nombre_animal,animal.id_clasificacion_id, clasificacion.nombre_clasificacion AS Clasificacion,animal.id_alimentacion_id, alimentacion.tipo_alimento AS Alimentacion,animal.id_habitat_id, habitat.nombre_habitat AS Habitat
FROM animal
INNER JOIN alimentacion ON  animal.id_alimentacion_id = alimentacion.id_alimentacion  
INNER JOIN clasificacion ON animal.id_clasificacion_id = clasificacion.id_clasificacion 
INNER JOIN habitat ON animal.id_habitat_id = habitat.id_habitat 
WHERE  id_animal = '$id_animal'";

$query2 = mysqli_query($conn, $consulta2);
$fila2 = mysqli_fetch_array($query2);

?>

   <!-- ========== Start formulario ========== -->
   <form action="actualizar_animal.php" method="post">
            <div class="mb-3">
                <label class="form-label">Cambiar Nombre del Animal</label>
                <input name="nombre_animal" value="<?php echo $fila2['nombre_animal'] ?>" type="text" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Clasificacion</label>
                <select name="id_clasificacion" class="form-select" aria-label="Default select example">
                    <?php
                    include('connection/connection.php');

                    $consulta = "SELECT*FROM clasificacion";
                    $resultado  = mysqli_query($conn, $consulta);

                    while ($fila = mysqli_fetch_array($resultado)) {
                        ?>
                        <option value="<?php echo $fila['id_clasificacion'] ?>"><?php echo $fila['nombre_clasificacion'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Alimentacion</label>
                <select name="id_alimentacion" class="form-select" aria-label="Default select example">
                    <?php
                    include('connection/connection.php');

                    $consulta = "SELECT*FROM alimentacion";
                    $resultado  = mysqli_query($conn, $consulta);

                    while ($fila = mysqli_fetch_array($resultado)) {
                        ?>
                        <option value="<?php echo $fila['id_alimentacion'] ?>"><?php echo $fila['tipo_alimento'] ?></option>
                    <?php } ?>
                </select>
            </div>
          
            <div class="mb-3">
                <label class="form-label">Habitat</label>
                <select name="id_habitat" class="form-select" aria-label="Default select example">
                    <?php
                    include('connection/connection.php');

                    $consulta = "SELECT*FROM habitat";
                    $resultado  = mysqli_query($conn, $consulta);

                    while ($fila = mysqli_fetch_array($resultado)) {
                        ?>
                        <option value="<?php echo $fila['id_habitat'] ?>"><?php echo $fila['nombre_habitat'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Editar Descripcion</label>
                <textarea name="descripcion" value="" class="form-control" required><?php echo $fila2['Descripcion'] ?></textarea>
            </div>
            <div><input name ="id_animal" value =" <?php echo $fila2['id_animal'] ?>" type ="hidden"></div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>

        <form action="" method="post">

        </form>

        <!-- ========== End formulario ========== -->

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>