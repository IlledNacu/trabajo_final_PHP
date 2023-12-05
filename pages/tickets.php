<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/php_2023_codoacodo/tp_integrador/styles.css" rel="stylesheet">
    <title>Comprar tickets</title>
</head>

<?php
    require 'header.php';
?>

    <div class="container text-center mt-5">
        <div class="row">
            <div class="col"></div>
            <div class="col border border-primary m-1 py-4">
                <h2>Estudiante</h2>
                <p>Descuento del</p>
                <span>80%</span>
                <p class="small text-muted">* presentar documentación</p>
            </div>
            <div class="col border border-info m-1 py-4">
                <h2>Trainee</h2>
                <p>Descuento del</p>
                <span>50%</span>
                <p class="small text-muted">* presentar documentación</p>
            </div>
            <div class="col border border-warning m-1 py-4">
                <h2>Junior</h2>
                <p>Descuento del</p>
                <span>15%</span>
                <p class="small text-muted">* presentar documentación</p>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <div class="container mt-1">
        <p class="text-center">VENTA</p>
        <h2 class="text-center">VALOR DE TICKET $200</h2>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"
                                required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido"
                                required>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3"><input type="mail" class="form-control" id="mail" name="mail"
                            placeholder="Correo" required></div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad"
                                required>
                        </div>
                        <div class="col-md-6">
                            <select class="form-select form-control" id="categoria">
                                <option selected>Categoría</option>
                                <option value="1">Estudiante</option>
                                <option value="2">Trainee</option>
                                <option value="3">Junior</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 my-5 bg-sky">
                        <p class="text-primary p-3">Total a Pagar: $<span id="total"></span></p>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-success form-control" id="borrarButton">Borrar</button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-success form-control" id="resumenButton">Resumen</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

<?php
    require 'footer.php';
?>

</html>