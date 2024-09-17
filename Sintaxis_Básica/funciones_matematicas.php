<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num1=rand();
        echo "El númereo es: " . $num1 . "<br>";
        $num2=rand(10,50);
        echo "El número es: " . $num2;

        //casting implicito
        $num3="5"; //aqui es de tipo String
        $num3+=2;// aqui es de tipo entero
        $num3+5.75;// aqui es de tipo float

        //casting de tipo explicito
        $num4="5";
        $resultado=(int) $num4;//se hace determina el tipo de variable porque sino seria string 

    ?>
</body>
</html>