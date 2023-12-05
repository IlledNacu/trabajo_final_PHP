<!DOCTYPE html>
<html lang="es"> <!-- LO MÍNIMO QUE TIENE QUE TENER LA ENTREGA FINAL ES QUE CONECTE LOS DATOS Y LOS MUESTRE -->
                        <!-- SE ENTREGA SI O SI EN WEBHOST PORQUE NO ANDA PHP EN GITHUB PAGES -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
    
    <title>Tu Conferencia</title>
</head>

<?php
    require 'pages/header.php';
?>

    <!-- Portada -->
    <div class="cover cover-fluid text-end" id="conferencia">
        <div class="cover-overlay">
            <div class="container py-5">
                <div class="row justify-content-end align-items-center">
                    <div class="col-md-6">
                        <h1 class="display-4">Conf Bs As</h1>
                        <p class="lead text-white">Bs As llega por primera vez a Argentina. Un evento para compartir con
                            nuestra comunidad el conocimiento y experiencia de los expertos que están creando el futuro
                            de Internet. Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo y los
                            oradores de primer nivel que tenemos para ti. ¡Te esperamos!</p>
                        <p>
                            <a href="#invitacion" class="btn btn-lg text-white border-white">Quiero ser orador</a>
                            <a href="pages/tickets.php" class="btn btn-success btn-lg">Comprar tickets</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Presentación de Oradores -->
    <div class="container mt-5" id="oradores">
        <p class="text-center">CONOCE A LOS</p>
        <h2 class="text-center">ORADORES</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <img src="assets/steve.jpg" class="card-img-top" alt="Orador 1">
                    <div class="card-body">
                        <p class="card-text">
                            <span class="bg-warning p-1 rounded">Javascript</span>
                            <span class="bg-info text-white p-1 rounded">React</span>
                        </p>

                        <h5 class="card-title">Steve Jobs</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem rerum
                            ducimus eius impedit! Aliquid vel consequatur explicabo, odio quia veniam est possimus
                            ipsum, esse fugit, voluptate in. Neque, consectetur voluptates.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <img src="assets/bill.jpg" class="card-img-top" alt="Orador 2">
                    <div class="card-body">
                        <p class="card-text">
                            <span class="bg-warning p-1 rounded">Javascript</span>
                            <span class="bg-info text-white p-1 rounded">React</span>
                        </p>

                        <h5 class="card-title">Bill Gates</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae
                            accusantium velit debitis repudiandae ducimus molestias sequi eos. Laudantium commodi dolore
                            optio animi quod totam consequuntur, debitis delectus dignissimos tempore accusantium.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <img src="assets/ada.jpeg" class="card-img-top" alt="Orador 3">
                    <div class="card-body">
                        <p class="card-text">
                            <span class="bg-dark text-white p-1 rounded">Negocios</span>
                            <span class="bg-danger text-white p-1 rounded">Startups</span>
                        </p>

                        <h5 class="card-title">Ada Lovelace</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus
                            voluptatibus repellendus, magni officiis repellat, ratione exercitationem corporis velit
                            fugit quam, suscipit autem quaerat quis iste atque. Nesciunt a recusandae voluptatem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección con imagen a la izquierda y texto a la derecha -->
    <div class="container-fluid mt-5 p-0 bg-dark text-light" id="lugar">
        <div class="row">
            <div class="col-lg-6">
                <img src="assets/honolulu.jpg" class="img-fluid" alt="Imagen">
            </div>

            <div class="col-lg-6 box-text">
                <h3>Bs As - Octubre</h3>
                <p>
                    Buenos Aires es la provincia y localidad más grande del estado de Argentina. Honolulu es la más
                    sureña de entre las principales ciudades estadounidenses. Aunque el nombre se refiere al área
                    urbana, en la costa surete de la isla de Oahu, la ciudad y el condado de Honolulu han formado una
                    ciudad-condado consolidada que cubre toda la ciudad (aproximadamente 600 km2 de superficie).
                </p>
                <a href="#" class="btn btn-lg text-white border-white">Conoce más</a>
            </div>
        </div>
    </div>


    <!-- Invitación a Convertirse en Orador -->
    <div class="container mt-5" id="invitacion"> <!-- Revisar qué falta en el form para que cumpla con la tabla de phpmyadmin -->
        <p class="text-center">CONVIÉRTETE EN UN</p>
        <h2 class="text-center">ORADOR</h2>
        <p class="text-center">Anótate como orador para dar una <a href="#" class="text-dark">charla.ignite</a>.
            ¡Cuéntanos de qué quieres hablar!</p>
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
                    <div class="col-md-12 mt-3">
                        <textarea type="text" class="form-control" id="tema" name="tema"
                            placeholder="Sobre qué quieres hablar?" required></textarea>
                        <p class="small text-muted">Recuerda incluir un título para tu charla</p>
                    </div>
                    <button type="submit" class="btn btn-success col-md-12">Enviar</button>
                </form>
            </div>
        </div>
    </div>


<?php
    require 'pages/footer.php';
?>

</html>