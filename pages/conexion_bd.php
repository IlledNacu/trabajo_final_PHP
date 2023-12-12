<?php
$conexion = mysqli_connect("localhost", "root", "", "integrador_cac");

// echo "Probando conexión a BD...<br>";

// if (mysqli_connect_error()) {
//     echo "No se conectó a la base de datos por el error: " . mysqli_connect_errno() . "<br>";
// } else {
//     echo "Se conectó a la base de datos<br>";
// }

$consulta = mysqli_query($conexion, "SELECT * FROM oradores");
?>