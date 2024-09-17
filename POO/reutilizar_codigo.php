<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("Vehiculo.php");

    $mazda=new Coche(4,"azul",1650);// Esto da instancia inicial 
    $pegaso=new Camion(8,"rojo",1850);

    echo "el mazda tiene " . $mazda->getRuedas() . "ruedas <br>";
    echo "el pegazo tiene " . $pegaso->getRuedas() . "ruedas <br>";
    
    ?>
</body>
</html>