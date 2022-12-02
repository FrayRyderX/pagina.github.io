<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Tienda</title>
</head>
<body>
    <header>
        <?php
        include(("./header5.php"))
        ?>
    </header>

    <main style="background-color:rgb(103, 197, 214)">
    <br>
        <hr class="mb-5 mb-dark">
        <div class="container">
            <div class="ms-3 pt-3 mb-3">
                <div class="border border-dark" style="background-color:rgb(84, 112, 214)">
                    <h1 id="1" style="text-align:center; font-family:Minimalust Regular;">Bienvenido!!!</h1>
                    <p>Un gusto volver a verte Administrador</p>
                    <div class="collapse navbar-collapse" id="navbarNav">
                </div>
                </div> 
            </div>  
        </div>
        <div class="container">
            <div class="ms-3 pt-3 mb-3">
                <div class="border border-dark" style="background-color:rgb(84, 112, 214)">
                    <h1 id="1" style="text-align:center; font-family:Minimalust Regular;">Administrar</h1>
                    <ul>
                        <li><a href="./clientes.php" style="color:black">Usuarios</a></li>
                        <li><a href="./productos.php" style="color:black">Productos</a></li>
                        <li><a href="./ventastotales.php" style="color:black">Ventas Totales</a></li>
                    </ul>
                    <div class="collapse navbar-collapse" id="navbarNav">
                </div>
                </div> 
            </div>  
        </div>
        <br>
        <hr class="mb-5 mb-dark">
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
