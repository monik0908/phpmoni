<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $alimentos=array("fruta"=>array("tropical"=>"kiwi",
                                    "critico"=>"mandarina",
                                    "otros"=>"manzana"),

                    "leche"=>array("animal"=>"vaca",
                                    "vegetal"=>"coco"),

                    "carne"=>array("vacuno"=>"lomo",
                                    "porcino"=>"pata"));

    //acceder
    echo $alimentos["carne"]["vacuno"];

    //recorrer
    foreach($alimentos as $clave_alim=>$alim){
        echo "$clave_alim:<br>";
        foreach($alim as $clave=>$valor){
            echo "$clave =$valor<br>";
        }
        echo "<br>";
    }

    //otra opcion 
    var_dump($alimentos);

?>
</body>
</html>