<?php
require 'conexion_bd.php';
require 'oradores.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../styles.css" rel="stylesheet">
    <title>Oradores registrados</title>
</head>

<body>

    <?php
    require 'header.php';
    ?>

    <div class="row mt-5 text-center"><p>Si usted es un administrador y desea ver los detalles de los oradores registrados o eliminar a alguno, por favor inicie sesión.</p></div>

    <form class="row g-3 my-5 justify-content-center" method="post" action="">
        <div class="col-auto">
            <label for="staticUser" class="visually-hidden">Usuario</label>
            <input type="text" class="form-control" id="user" placeholder="Usuario" name="user">
        </div>
        <div class="col-auto">
            <label for="inputPassword" class="visually-hidden">Contraseña</label>
            <input type="password" class="form-control" id="inputPassword2" placeholder="Contraseña" name="password">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Confirmar identidad</button>
        </div>
    </form>

    <?php
    $user = isset($_POST['user']) ? $_POST['user'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if ($user == "codoacodo42023" && $password == "cursophp23584") {
    ?>

        <table class="table table-danger table-striped my-5">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Tema</th>
                    <th scope="col">Alta</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($oradores as $orador) {
                    echo "<tr>";
                    echo '<th scope="row">' . $orador->id_orador . '</th>';
                    echo '<td>' . $orador->nombre . '</td>';
                    echo '<td>' . $orador->apellido . '</td>';
                    echo '<td>' . $orador->getMail() . '</td>';
                    echo '<td>' . $orador->tema . '</td>';
                    echo '<td>' . $orador->fecha_alta . '</td>';
                    echo '<td><form method="post" action=""><input type="hidden" name="id_orador" value="' . $orador->id_orador . '"><!-- <input type="submit" value="Editar" name="editar" class="btn btn-success mx-1"> --><input type="submit" value="Borrar" name="borrar" class="btn btn-danger mx-1"></form></td>';
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

    <?php
    }

    // Borrar algún registro

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["borrar"])) {
        $id_orador_a_eliminar = $_POST["id_orador"];

        $queryEliminar = "DELETE FROM oradores WHERE id_orador = '$id_orador_a_eliminar' ";
        $deleteRegistro = mysqli_query($conexion, $queryEliminar);

        if ($deleteRegistro) {
            echo "<p class='mx-5'>Eliminado.<br>Si desea ver los cambios, vuelva a iniciar sesión.</p>";
        } else {
            echo "<p class='mx-5'>Error al eliminar.</p>";
        }
    }

    echo "<div><img src='../assets/hawaii3.jpg' class='img-fluid'></div>";
    require 'footer.php';
    ?>

</body>

</html>