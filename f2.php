<?php
session_start();

    //Para poder usar la clase Database y su función connect
    require('./Database.php');

    //Creamos un objeto del tipo Database
    $db = new Database();
    $connection = $db->connect(); //Creamos la conexión a la BD

    // Cuando la conexión está establecida...
    $query = $connection->prepare("SELECT nombre FROM producto WHERE identificadorCategoria='1' AND id='2'");// Traduzco mi petición
    $query->execute(); //Ejecuto mi petición

    $name = $query->fetchAll(PDO::FETCH_ASSOC); //Me traigo los datos que necesito

    // Cuando la conexión está establecida...
    $query2 = $connection->prepare("SELECT precio FROM producto WHERE identificadorCategoria='1' AND id='2'");// Traduzco mi petición
    $query2->execute(); //Ejecuto mi petición

    $price = $query2->fetchAll(PDO::FETCH_ASSOC); //Me traigo los datos que necesito

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
        include(("./header2.php"))
        ?>
    </header>

    <main style="background-color:rgb(103, 197, 214)">
        <br> <br>
        <form action="./registrodeproducto.php" method="post">
            <div class="container-lg" style="background-color: rgb(223, 217, 217) ;">
                <div class="row">
                    <div class="col-9"><?php foreach($name as $key => $product){?><h4><?php echo $product["nombre"]; ?></h4><?php } ?></div> <br> <br>
                    <div class="col-5"><img src="./imagenes/2funko.jpg" width="60"><br> <br> 
                    <img src="./imagenes/2-1.jpg" width="60"> <br> <br> <img src="./imagenes/2-2.jpg" width="60"> <br> <br> <img src="./imagenes/2-3.jpg" width="60"> </div>
                    <div class="col-6"><img src="./imagenes/2funko.jpg" width="500" width="principal"></div>
                    <div class="col-6">
                        <br> <br> <br> <h3>Precio:</h3>
                        <?php foreach($price as $key => $product){?>
                        <h4>$ <?php echo $product["precio"]; ?></h4>
                        <?php } ?>
                        <br> <br>
                        <div class="text-center">
                            <div class="d-grid gap-2 col-10">
                                <label for="cantidad">Cantidad:</label>
                                <input type="text" class="form-control" name="cantidad" id="cantidad" placeholder="Cantidad" pattern="[0-9]+">
                            </div>
                            <div class="d-grid gap-2 col-10">
                                <label for="precio">Precio:</label>
                                <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio" pattern="[0-9]+">
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-outline-success" style="background-color:green; color:black">Agregar</button>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
                <div style="text-align:center;">
                    <br>
                    <div class="nav-item">
                        <button type="button" class="btn btn-outline-light"  style="background-color:rgb(87, 68,252)"><a class="nav-link" href="./FunkoPop.php">Volver</a></button>
                    </div>
                </div>
        </form>
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