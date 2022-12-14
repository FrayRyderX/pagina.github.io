<?php
    //Para poder usar la clase Database y su función connect
    require('./Database.php');

    //Creamos un objeto del tipo Database
    $db = new Database();
    $connection = $db->connect(); //Creamos la conexión a la BD

    // Cuando la conexión está establecida...
    $query = $connection->prepare("SELECT * FROM producto");// Traduzco mi petición
    $query->execute(); //Ejecuto mi petición

    $productos = $query->fetchAll(PDO::FETCH_ASSOC); //Me traigo los datos que necesito

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
                    <h1 id="1" style="text-align:center; font-family:Minimalust Regular;">Editor de Productos</h1>
                    <p>Borrar Clientes</p>
                    <table  class="table table-dark table-striped">
                        <th>
                            <tr>
                                <td>id</td>
                                <td>Nombre</td>
                                <td>Precio</td>
                                <td>Stock</td>
                            </tr>
                            <tbody>
                                <?php foreach($productos as $key => $producto){ ?>
                                    <tr>
                                        <td><?php echo $producto["id"]."<br>"; ?></td>
                                        <td><?php echo $producto["nombre"]."<br>"; ?></td>
                                        <td><?php echo $producto["precio"]."<br>"; ?></td>
                                        <td><?php echo $producto["stock"]."<br>"; ?></td>
                                        <td> <a style="color:white" href="./eliminar2.php?id=<?php echo $producto["id"]; ?>">Eliminar</a> </td>
                                        <td> <a style="color:white" href="./editar.php?id=<?php echo $producto["id"]; ?>">Editar</a> </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </th>
                    </table>
                    <br>
                    <br>
                    <button type="button"><a class="nav-link" href="./administrar.php">Volver</a></button>
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