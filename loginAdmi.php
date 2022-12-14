<?php  
require('./Database.php');

    //Creamos un objeto del tipo Database
    $db = new Database();
    $connection = $db->connect(); //Creamos la conexión a la BD

    $admi = $_POST["usuario"];
    $password = $_POST["contrasena"];
    
    $usuario = htmlentities($usuario);
    $password =htmlentities($password);

    $query = "SELECT * FROM admi WHERE usuario = :usuario AND contrasena = :contrasena";  
    $statement = $connection->prepare($query);  
    $statement->execute(array(  
                              'usuario'     =>     $usuario,  
                              'contrasena'     =>     $password));  
    $count = $statement->rowCount();  

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Registro Exitoso</title>
    </head>
    <body>
        <header>
            <?php
            include(("./header0.php"))
            ?>
        </header>     

        <main style="background-color:rgb(103, 197, 214)">
            <br>
            <hr class="mb-5 mb-dark">
            <div class="container">
                <div class="ms-3 pt-3 mb-3">
                    <div class="border border-dark" style="background-color:rgb(84, 112, 214)">
                        <?php
                            if($count > 0) {  
                                echo '<h3>Inicio de Sesión Logrado, Bienvenido - '.$_POST["usuario"].'</h3>';  
                                echo '<br /><br /><a href="administrar.php" style="color:black">Administrar Página</a>';
                                echo '<br>';
                            }  elseif(isset($_POST["usuario"])){                      
                                $_SESSION["usuario"] = $_POST["contrasena"];  
                                header("location:iniciarsesion.php");  
                            }
                        ?>
                    </div> 
                </div>  
            </div>
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