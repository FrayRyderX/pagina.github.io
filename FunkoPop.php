<?php
session_start();

    //Para poder usar la clase Database y su función connect
    require('./Database.php');

    //Creamos un objeto del tipo Database
    $db = new Database();
    $connection = $db->connect(); //Creamos la conexión a la BD

    // Cuando la conexión está establecida...
    $query = $connection->prepare("SELECT nombre FROM producto WHERE identificadorCategoria='1' AND id='1'");// Traduzco mi petición
    $query->execute(); //Ejecuto mi petición

    $producto1 = $query->fetchAll(PDO::FETCH_ASSOC); //Me traigo los datos que necesito

    // Cuando la conexión está establecida...
    $query2 = $connection->prepare("SELECT nombre FROM producto WHERE identificadorCategoria='1' AND id='2'");// Traduzco mi petición
    $query2->execute(); //Ejecuto mi petición

    $producto2 = $query2->fetchAll(PDO::FETCH_ASSOC); //Me traigo los datos que necesito

    // Cuando la conexión está establecida...
    $query3 = $connection->prepare("SELECT nombre FROM producto WHERE identificadorCategoria='1' AND id='3'");// Traduzco mi petición
    $query3->execute(); //Ejecuto mi petición

    $producto3 = $query3->fetchAll(PDO::FETCH_ASSOC); //Me traigo los datos que necesito

    // Cuando la conexión está establecida...
    $query4 = $connection->prepare("SELECT nombre FROM producto WHERE identificadorCategoria='1' AND id='4'");// Traduzco mi petición
    $query4->execute(); //Ejecuto mi petición
        
    $producto4 = $query4->fetchAll(PDO::FETCH_ASSOC); //Me traigo los datos que necesito

?>

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
    <br>
        <div class="container">
            <div class="ms-3 pt-3 mb-3 mt-3 ps-3">
                <div style="background-color:rgb(84, 112, 214)">
                    <h1 id="2" style="text-align:center; font-family:Minimalust Regular;">Funko Popp</h1>
                    <section>
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            <div class="col md-4">
                                <div class="card">
                                    <img src="./imagenes/1funko.jpg" class="card-img-top" alt="Cell" width="300" height="300">
                                    <div class="card-body">
                                        <?php foreach($producto1 as $key => $product){?>
                                        <h5 class="card-title"><?php echo $product["nombre"]; ?></h5>
                                        <?php } ?>
                                        <p class="card-text">Funk Pop del villano de la serie de Dragon ball</p>
                                    </div>
                                    <br>
                                    <button type="button"><a class="nav-link" href="./f1.php" style="background-color:rgb(40, 247, 210)">Ver</a></button>
                                    <br>
                                </div>
                            </div>
                            <div class="col md-4">
                                <div class="card">
                                    <img src="./imagenes/2funko.jpg" class="card-img-top" alt="Harry Potter" width="300" height="300">
                                    <div class="card-body">
                                    <?php foreach($producto2 as $key => $product){?>
                                        <h5 class="card-title"><?php echo $product["nombre"]; ?></h5>
                                        <?php } ?>
                                        <p class="card-text">Funko Pop del personaje principal de las películas de Harry Potter</p>
                                    </div>
                                    <br>
                                    <button type="button"><a class="nav-link" href="./f2.php"  style="background-color:rgb(40, 247, 210)">Ver</a></button>
                                    <br>
                                </div>
                            </div>
                            <div class="col md-4">
                                <div class="card">
                                    <img src="./imagenes/3funko.jpg" class="card-img-top" alt="Moon Knight" width="300" height="300">
                                    <div class="card-body">
                                    <?php foreach($producto3 as $key => $product){?>
                                        <h5 class="card-title"><?php echo $product["nombre"]; ?></h5>
                                        <?php } ?>
                                        <p class="card-text">Funk Pop de la serie más popular de Marvel Moon Knight</p>
                                    </div>
                                    <br>
                                    <button type="button"><a class="nav-link" href="./f3.php"  style="background-color:rgb(40, 247, 210)">Ver</a></button>
                                    <br>
                                </div>
                            </div>
                            <div class="col md-4">
                                <div class="card">
                                    <img src="./imagenes/4funko.jpg" class="card-img-top" alt="Naruto & Sasuke" width="3" height="300">
                                    <div class="card-body">
                                    <?php foreach($producto4 as $key => $product){?>
                                        <h5 class="card-title"><?php echo $product["nombre"]; ?></h5>
                                        <?php } ?>
                                        <p class="card-text">Funko Pop de unas de las mejores series de Anime del mundo</p>
                                    </div>
                                    <br>
                                    <button type="button"><a class="nav-link" href="./f4.php"  style="background-color:rgb(40, 247, 210)">Ver</a></button>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </section>
                    <br>
                    <button type="button"><a class="nav-link" href="./index.php">Volver</a></button>
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