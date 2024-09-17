<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre="Juan";

        function dameNombre(){
           /* $nombre="Maria";
            //esta variable es diferente a la externa
            //la función no cambia la variable $nombre externa
            //tampoco puede llamar una funcion a una variable externa*/

            global $nombre;//siembre debe ir el global dentro de la funcion
            $nombre= "El nombre es " . $nombre;
        }

        dameNombre();

        echo $nombre;
    ?>
</body>
</html>