<?php
session_start();

?>

<!
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Tienda</title>
</head>
<body>
    <header>
        <?php
        include(("./header3.php"))
        ?>
    </header>
    <main style="background-color:rgb(103, 197, 214)">
        <br>
        <h3 style="text-align:center ;">Ingrese los datos de su Tarjeta para Pagar:</h3>
        <br> <br>
        <div class="container align-items-center">
            <div class="text-bg-light p-3 col-sm-20 col-md-6 col-lg-9 col-xl-4 gap- bg-opacity-20 border rounded">
                <div class="text-center">
                    <form action="" method="post">
                    <div class="d-grid gap-2 col-12">
                        <label for="usuario">Nombre Completo:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                    </div>
                    <div class="d-grid gap-2 col-12">
                        <label for="contraseña">Telefono:</label>
                        <input type="text" class="form-control" name="tel" id="tel" placeholder="Telefono">
                    </div>
                    <div class="d-grid gap-2 col-12">
                        <label for="contraseña">Dirección:</label>
                        <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion">
                    </div>
                    <div class="d-grid gap-2 col-12">
                        <label for="contraseña">Cédula:</label>
                        <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cédula">
                    </div>
                    <div class="d-grid gap-2 col-12">
                        <label for="contraseña">Metodo de pago:</label>
                        <div sytle="text-align:center;">
                        <img src="./imagenes/masterdcard.png" width="50">
                        <input type="radio" name="masterdCard" id="masterCard">
                        <img src="./imagenes/visa.png" width="50">
                        <input type="radio">
                        <img src="./imagenes/paypal.webp" width="50">
                        <input type="radio">
                        <br>
                        <label for="contraseña">Numero de tarjeta:</label>
                        <input type="text" class="form-control" name="tarjeta" id="tarjeta" placeholder="XXX-XXX-XXX">
                        <label for="contraseña">CV:</label>
                        <input type="text" name="cv" id="cv" placeholder="XXX">
                    </div>
                        
                    <button type="submit" class="btn btn-outline-success"><a class="nav-link" href="./pagoExitoso.php" style="background-color:white; color:black">Pagar</a></button>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <button type="button" class="btn btn-outline-light"><a class="nav-link" href="./carrito.php" style="background-color:white; color:black">Atras</a></button>
        <br>
        <br>
    </main>
    <footer>
    <?php
        include(("./footer.php"))
        ?>
    </footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>