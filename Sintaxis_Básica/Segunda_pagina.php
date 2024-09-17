<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
//COMENTARIOS
    //para comentario de una linea
    /* esto para comentario de varias lineas
    */

    // CREAR VARIABLES
    $nombre="Juan";
    $edad=18;
    print "El nombre del usuario es $nombre <br>";
    print 'El nombre del usuario es $nombre <br>';//sin comillas dobles no maneja $nombre como variable sino texto
    print "El nombre del usuario es " . $nombre ;

    /*
    print no permite imprimir dos variables
    echo si lo permite por ejemplo echo $nombre,$edad
    */
    echo "<br>",$nombre,$edad;
    ?>
</body>
</html>