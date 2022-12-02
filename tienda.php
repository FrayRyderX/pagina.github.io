<?php
    require("./Session.php");
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
    <link rel="stylesheet" href="./style.css">
    <title>Tienda</title>
</head>
<body>
    <header>
        <?php
        include(("./header2.php"))
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
                    <h1 id="1" style="text-align:center; font-family:Minimalust Regular;">Bienvenido!!!</h1>
                    <p>Esperamos que tu estancia sea bastante agradable y que puedas comprar algo que te guste, recuerda actualizamos los productos cada cierto tiempo y agregamos más :)</p>
                    <ul>
                        <li>Funko Pop</li>
                        <li>Mangas</li>
                        <li>Accesorrios de Colección</li>
                        <li>Figuras de Acción de diferentes tamaños</li>
                    </ul>
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