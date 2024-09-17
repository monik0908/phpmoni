<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function dameNombre(){
        print "El nombre del usuario es camilo <br>";
    }
    ?>
    <?php

    echo "Este es el primer mensaje<br>";
    function dameDatos(){
        echo "Este es el mensaje del interior de la funcion <br>";
    }
    dameDatos();
    echo "Este es el segundo mensaje <br>";
    dameDatos();
    dameNombre();
    include ("dameEdad.php");

    ?>
    
    
</body>
</html>