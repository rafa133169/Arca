<!doctype html>
<html lang="en">

<head>
    <title>Clasificacion</title>
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
        <form action="insert/registro_alimentacion.php" method="post">
            <div class="mb-3">
                <label class="form-label">Ingresa otra alimentacion</label>
                <input name="tipo_alimento2" type="text" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Añadir Alimentacion</button>
        </form>

        <form action="" method="post">

        </form>

        <!-- ========== End formulario ========== -->

        <!-- ========== Start table ========== -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tipo de Alimentacion</th>
                    <th scope="col">Animales</th>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Actualizar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('connection/connection.php');

                $c = 1;
                $consulta = "SELECT id_alimentacion, tipo_alimento AS Alimentacion, COUNT(id_animal) AS contador FROM animal  RIGHT JOIN 
                	alimentacion ON animal.id_alimentacion_id = alimentacion.id_alimentacion GROUP BY id_alimentacion";
                $query = mysqli_query($conn, $consulta);

                while ($fila = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $c; ?>
                        </th>
                        <td>
                            <?php echo $fila['Alimentacion']; ?>
                        </td>
                        <td>
                            <?php echo $fila['contador']; ?>
                        </td>
                        <td>
                            <a href="delete/eliminar_alimentacion.php?id_alimentacion=<?php echo $fila['id_alimentacion']; ?>">
                                <i class="bi bi-trash2-fill text-danger" style="font-size: 1.5rem;"></i>
                            </a>
                        </td>
                        <td>
                            <a href="update/alimentacion.php?id_alimentacion=<?php echo $fila['id_alimentacion']; ?>">
                                <i class="bi bi-pencil-square text-warning" style="font-size: 1.5rem;"></i>
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