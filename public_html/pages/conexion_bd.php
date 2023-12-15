<?php
$conexion = mysqli_connect("localhost", "id21672831_tuconferenciag7", "cursoPHP_23584", "id21672831_oradores");
$consulta = mysqli_query($conexion, "SELECT * FROM oradores");
?>