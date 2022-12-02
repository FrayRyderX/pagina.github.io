<?php
session_start();

require("./Session.php");

    //Para poder usar la clase Database y su función connect
    require('./Database.php');

    //Creamos un objeto del tipo Database
    $db = new Database();
    $connection = $db->connect(); //Creamos la conexión a la BD

    // Cuando la conexión está establecida...
    $query = $connection->prepare("SELECT * FROM venta");// Traduzco mi petición
    $query->execute(); //Ejecuto mi petición

    $venta = $query->fetchAll(PDO::FETCH_ASSOC); //Me traigo los datos que necesito

    $total_income_query = $connection->prepare("SELECT sum(precio) FROM venta");

    $total_income_query->execute();

    $total = $total_income_query->fetch(PDO::FETCH_NUM);

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
        include(("./header4.php"))
        ?>
    </header>

    <main style="background-color:rgb(103, 197, 214)">
        <div class="container">
            <div class="ms-3 pt-3 mb-3">
                <div class="border border-dark" style="background-color:rgb(84, 112, 214)">
                <h3 style="text-align: center;">Carrito:</h3> <br>
                    <div class="text-align: center; text-bg-light p-3 col-sm-20 col-md-6 col-lg-4 col-xl-10 gap-3 bg-opacity-20 border rounded">
                        <h5>Productos:</h5>
                        <br> <br>
                            <ul>
                            <?php foreach($venta as $key => $ventas){ ?>
                                <li>Id: <?php echo $ventas["idVenta"]."<br>"; ?>    |||     Cantidad: <?php echo $ventas["cantidad"]."<br>"; ?>     |||     Precio: <?php echo $ventas["precio"]."<br>"; ?></li>
                                <?php } ?>
                            </ul>
                        <br> <br>
                        <h5>Total: <?php echo $total_income = $total[0]; ?></h5>
                        <br>
                        <a href="./pagoFinal.php">Comprar</a>
                    </div>
                    <br>
                    <h3 style="text-align: center;">Gracias por tu compra!</h3>
                    <br>
                    <br>
                    <button type="button"><a class="nav-link" href="./tienda.php">Volver</a></button>
                </div> 
            </div>  
        </div>
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