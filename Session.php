<?php

session_start();

if(!empty($_SESSION['usario']) && !empty($_SESSION['contrasena'])) {
    echo"<center>
    <br>
    <h1> Bienbenido ".$_SESSION['usuario'].",</h1>
    <h2>Espero te encuentres bien. Que tengas un buen día :)</h2>
    <br>
    <a href='./tienda.php'>
    <button type='submit'>Login</button>
    </a>
    </center>";
} else {
    die("<center>
    <br>
    <h1>Error no te has conectado todavía...! </h1>
    <h2>Redirigite a la página de login.</h2>
    <br>
    <a href='./iniciarsesion.php'>
    <button type='submit'>Login</button>
    </a>
    </center>");
    session_destroy();
}
