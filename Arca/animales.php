<!doctype html>
<html lang="en">

<head>
    <title>Animales</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>

        <!-- ========== Start formulario ========== -->
        <form action="insert/registro_animal.php" method="post">
            <div class="mb-3">
                <label class="form-label">Ingresa un Animal</label>
                <input name="nombre_animal" type="text" class="form-control" required>
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
                <label class="form-label">Añade una Descripcion</label>
                <input name="descripcion" type="text" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Añadir Animal</button>
        </form>

        <form action="" method="post">

        </form>

        <!-- ========== End formulario ========== -->

        <!-- ========== Start table ========== -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Animal</th>
                    <th scope="col">clasificacion</th>
                    <th scope="col">Alimentacion</th>
                    <th scope="col">Habitat</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Actualizar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('connection/connection.php');

                $c = 1;

                $consulta = "SELECT id_animal,descripcion_animal AS Descripcion, animal.nombre_animal AS Animal, clasificacion.nombre_clasificacion AS Clasificacion, alimentacion.tipo_alimento AS Alimentacion, habitat.nombre_habitat AS Habitat
                 FROM animal
                 INNER JOIN alimentacion ON  animal.id_alimentacion_id = alimentacion.id_alimentacion
                INNER JOIN clasificacion ON animal.id_clasificacion_id = clasificacion.id_clasificacion
                INNER JOIN habitat ON animal.id_habitat_id = habitat.id_habitat";
                
                $query = mysqli_query($conn, $consulta);

                while ($fila = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $c; ?>
                        </th>
                        <td>
                            <?php echo $fila['Animal']; ?>
                        </td>
                        <td>
                            <?php echo $fila['Clasificacion']; ?>
                        </td>
                        <td>
                            <?php echo $fila['Alimentacion']; ?>
                        </td>
                        <td>
                            <?php echo $fila['Habitat']; ?>
                        </td>
                        <td>
                            <?php echo $fila['Descripcion']; ?>
                        </td>
                        
                        <td>
                            <a href="delete/eliminar_animal.php?id_animal=<?php echo $fila['id_animal'] ?>">
                            <i class="bi bi-trash3-fill text-danger" style="font-size: 1.5rem;"></i>
                            </a>
                        </td>
                        <td>
                            <a href="update/animal.php?id_animal=<?php echo $fila['id_animal'] ?>">
                            <i class="bi bi-pencil-square text-success" style="font-size: 1.5rem;"></i>
                            </a>
                        </td>
                    </tr>
                    <?php $c++; } ?>
            </tbody>
        </table>
        <!-- ========== End table ========== -->

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