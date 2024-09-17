<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    /*
    //funcion predefinidad strtolower eje
    $palabra="JUAN";
    echo(strtolower($palabra)) . "<br>";
    $palabra="juan";
    //funciones propias
    function suma($num1, $num2){
        $resultado=$num1+$num2;
        return $resultado;
    }

    echo (suma(1,2));
*/

 function frase_mayus($frase, $conversion=true){
    $frase=strtolower($frase);
    if($conversion==true){
        $resultado=ucwords($frase);
    }else{
        $resultado=strtoupper($frase);
    }
    return $resultado;
 }

 echo(frase_mayus("eseto es una prueba")) . "<br>";
 echo(frase_mayus("esto es una prueba",false)) . "<br>";
?>
</body>
</html>