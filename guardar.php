<?php
    //Para poder usar la clase Database y su función connect
    require('./Database.php');

    //Creamos un objeto del tipo Database
    $db = new Database();
    $connection = $db->connect(); //Creamos la conexión a la BD

    $d = $_POST["documento"];
    $n = $_POST["nombres"];
    $a = $_POST["apellidos"];
    $fn = $_POST["fechaDeNacimiento"];
    $direccion = $_POST["direccion"];
    $correo = $_POST["correo"];
    $u = $_POST["usuario"];
    $pwd = $_POST["contrasena"];

    $d = htmlentities($d);
    $n = htmlentities($n);
    $a = htmlentities($a);
    $fn = htmlentities($fn);
    $direccion = htmlentities($direccion);
    $correo = htmlentities($correo);
    $u = htmlentities($u);
    $pwd = htmlentities($pwd);


    $query = $connection->prepare("INSERT INTO cliente(documento, nombres, apellidos, fechaDeNacimiento, direccion, correo, usuario, contrasena) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");// Traduzco mi petición
    $guardar = $query->execute([$d, $n, $a, $fn, $direccion, $correo, $u, $pwd]); //Ejecuto mi petición
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Datos Guardados</title>
</head>
<body>
    <header>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="height: 150px;">
                <div class="carousel-item active">
                    <img src="./imagenes/andy-holmes-rCbdp8VCYhQ-unsplash.jpg" class="d-block w-100" alt="fondo">
                </div>
                <div class="carousel-item">
                    <img src="./imagenes/jeremy-thomas-E0AHdsENmDg-unsplash.jpg" class="d-block w-100" alt="fondo">
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg " style="background-color:black">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.html" style="color:rgb(211, 225, 237)">
                    <img src="./imagenes/pila-de-monedas.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
                    Tienda Pops
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <button type="button" class="btn btn-outline-light"><a class="nav-link" href="./index.html" style="color:red">Inicio</a></button>
                        </li>
                </div>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <button type="button" class="btn btn-outline-light"><a class="nav-link" aria-current="page" href="./iniciarsesion.php">Iniciar Sesión</a></button>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main style="background-color:rgb(103, 197, 214)">
    <br>
    <br>
    <br>
    <br>
        <div class="container">
            <div class="ms-3 pt-3 mb-3">
                <div class="border border-dark" style="background-color:rgb(84, 112, 214)">
                    <?php
                        if ($guardar) {
                            echo "<h2 style='text-align:center, font-family:Minimalust Regular; color:black;'>Datos Guardados Correctamente<h2>";
                        }
                    ?>
                </div>
            </div>  
        </div>
        <br>
        <br>
        <br>
        <br>
    </main>

    <footer class="bg-black text-white pt-4 pb-4" style="flex:auto">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <p>Página Tributo</p>
                </div>
                <hr class="mb-4">
                <div class="row aling-items-center">
                    <div class="col-md-7 col-lg--8">
                        <p>Todos los Derechos Reservados | 2022</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
