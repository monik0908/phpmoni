<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .resaltar{
            color:#f00;
            font-weight:bold;
        }
    </style>
</head>
<body>
    <?php
    $nombre="Juan";
        echo "<p class='resaltar'>Esto es un ejemplo de frase </p>";
        echo "<p class=\"resaltar\">Esto es un ejemplo de frase </p>";
        echo "Hola $nombre <br>";//si usas comidas dobles toma nombre como variable
        //si utilizas comillas simple utiliza el nombre como literal

        $variable1="Casa";
        $variable2="Casadar";

        $resultado=strcmp($variable1,$variable2);
        //devuelve 1 si no son iguales y o si son iguales
        //tiene en cuenta mayúsculas
        echo "El resultado es " . $resultado . "<br>";

        $resultado=strcasecmp($variable1,$variable2);
        //ignora mayúscula y minúscula
        echo "El resultado es " . $resultado;

        if ($resultado){
            echo "No coinciden";
        }else{
            echo"Coinciden";
        }

    ?>
</body>
</html>