<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Página Informativa</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg " style="background-color:black">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.html" style="color:rgb(211, 225, 237)">
                    <img src="./imagenes/pila-de-monedas.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
                    Tienda Pops
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>

    <main style="background-color:rgb(103, 197, 214)">
        <br>
        <hr class="mb-5 mb-dark">
        <h3 style="text-align:center; font-family:Minimalust Regular;">Bienvenido Administrador!!!</h3>
        <hr class="mb-5 mb-dark">
        <div class="container align-items-center">
            <div class="text-bg-light p-3 col-sm-20 col-md-6 col-lg-9 col-xl-4 gap- bg-opacity-20 border rounded">
                <div class="text-center">
                    <form action="loginAdmi.php" method="post">
                    <div class="d-grid gap-2 col-12">
                        <label for="usuario">Usuario:</label>
                        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
                    </div>
                    <div class="d-grid gap-2 col-12">
                        <label for="contrasena">Contraseña:</label>
                        <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Contraseña">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-outline-success">Ingresar</button>
                    <br> <br>
                    <button type="button"><a class="nav-link" href="./index.html">Volver</a></button>
                    </form>
                </div>
            </div>
        </div>
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