<?php
    //Para poder usar la clase Database y su función connect
    require('./Database.php');

    //Creamos un objeto del tipo Database
    $db = new Database();
    $connection = $db->connect(); //Creamos la conexión a la BD

    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];

    $cantidad = htmlentities($cantidad);
    $precio =htmlentities($precio);

    if($precio == 90000 || $precio == 74950 || $precio == 125000 || $precio == 250000 || $precio == 550000 || $precio == 475000 || $precio == 315000 || $precio == 398500 || $precio == 675500 || $precio == 985500){
        $multi = $cantidad * $precio;

        // Cuando la conexión está establecida...
        $query1 = $connection->prepare("INSERT INTO facturaciontienda(cantidad, precio_venta) VALUES(?, ?)");// Traduzco mi petición
        $guardar = $query1->execute([$cantidad, $multi]);
    
        // Cuando la conexión está establecida...
        $query2 = $connection->prepare("INSERT INTO venta(cantidad, precio) VALUES(?, ?)");// Traduzco mi petición
        $guardar = $query2->execute([$cantidad, $multi]);
    }else{
        header("Location:index.php");
        echo '<script> alert("Por Favor, ingresa el precio dado por el producto, nos molesta que no seas una persona honesta");</script>';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
    <?php
        include(("./header4.php"))
        ?>
    </header>

    <main style="background-color:rgb(103, 197, 214)">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="height: 200px;">
                <div class="carousel-item active">
                    <img src="./imagenes/andy-holmes-rCbdp8VCYhQ-unsplash.jpg" class="d-block w-100" alt="fondo">
                </div>
                <div class="carousel-item">
                    <img src="./imagenes/jeremy-thomas-E0AHdsENmDg-unsplash.jpg" class="d-block w-100" alt="fondo">
                </div>
            </div>
        </div>
        <hr class="mb-5 mb-dark">
        <div class="container">
            <div class="ms-3 pt-3 mb-3">
                <div class="border border-dark" style="background-color:rgb(84, 112, 214)">
                    <?php
                        if($guardar){
                            echo "<h2> Producto Agregado <h2>";
                            echo ("<br>"); 
                            echo ("<br>");
                            echo ("<button type='button'><a class='nav-link' href='./tienda.php'>Volver</a></button>");
                        } else {
                            echo "<h2> Error al agregar el Producto <h2>";
                        }
                    ?>
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



