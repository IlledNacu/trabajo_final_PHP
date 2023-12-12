<?php

require 'conexion_bd.php';

class Orador
{
    public $id_orador;
    public $nombre;
    public $apellido;
    private $mail;
    public $tema;
    public $fecha_alta;

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }
}

$oradores = array();
$i = 0;

while ($fila = mysqli_fetch_array($consulta)) {
    $oradores[$i] = new Orador();

    $oradores[$i]->id_orador = $fila['id_orador'];
    $oradores[$i]->nombre = $fila['nombre'];
    $oradores[$i]->apellido = $fila['apellido'];
    $oradores[$i]->setMail($fila['mail']);
    $oradores[$i]->tema = $fila['tema'];
    $oradores[$i]->fecha_alta = $fila['fecha_alta'];

    $i++;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Oradores registrados</title>
</head>

<body>
    <table class="table table-danger table-striped">
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
                echo '<td><form method="post" action=""><input type="hidden" name="id_orador" value="' . $orador->id_orador . '"><input type="submit" value="Editar" name="editar" class="btn btn-success mx-1"><input type="submit" value="Borrar" name="borrar" class="btn btn-danger mx-1"></form></td>';
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <?php
    require "conexion_bd.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["borrar"])) {
        $id_orador_a_eliminar = $_POST["id_orador"];

        // Aquí debes realizar la conexión y ejecutar la consulta de eliminación
        require "conexion_bd.php";
        $queryEliminar = "DELETE FROM oradores WHERE id_orador = '$id_orador_a_eliminar' ";
        $deleteRegistro = mysqli_query($conexion, $queryEliminar);

        if ($deleteRegistro) {
            echo "Eliminado.<br><a href='administrador.php' class='btn btn-success'>Actualizar</a>";
        } else {
            echo "<br>Error al eliminar.";
        }
    }

    // Editar algún registro
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>