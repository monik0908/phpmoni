<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>&nbsp</p>
    <form name="form1" method="post" action="">
        <p>
            <label for="num1"></label>
            <input type="text" name="num1" id="num1">
            <label for="num2"></label>
            <input type="text" name="num2" id="num2">
            <label for="operacion"></label>
            <select name="operacion" id="operacion">
                <option>suma</option>
                <option>resta</option>
                <option>Multiplicación</option>
                <option>División</option>
                <option>Módulo</option>
            </select>
        </p>
        <p>
            <input type="submit" name="button" id="button" value="Enviar" onClik="prubea">
        </p>
    </form>
    <p>&nbsp</p>
    <?php
        if(isset($_POST["button"])){
            $numero1=$_POST["num1"];            
            $numero2=$_POST["num2"];
            $operacion=$_POST["operacion"];
        
            if(!strcmp("suma",$operacion)){
                echo "El resultado es: " . ($numero1+$numero2);
            }
            if(!strcmp("resta",$operacion)){
                echo "El resultado es: " . ($numero1-$numero2);
            }
            if(!strcmp("Multiplicación",$operacion)){
                echo "El resultado es: " . ($numero1*$numero2);
            }
            if(!strcmp("División",$operacion)){
                echo "El resultado es: " . ($numero1/$numero2);
            }
            if(!strcmp("Módulo",$operacion)){
                echo "El resultado es: " . ($numero1%$numero2);
            }


        }

    ?>
</body>
</html>