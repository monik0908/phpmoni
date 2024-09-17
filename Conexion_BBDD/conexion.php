<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $db_host="localhost";
        $db_nombre="usuaarios";
        $db_usuario="root";
        $db_contra="";

        //procedimientos
        $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
       
       /*SOLUCION DE POSIBLES ERRROES DE CONEXION
       
            if(mysqli_connect_errno()){
                    echo "fallo al conectar con la bbdd";
                    exit();
                }

        
            mysqli_set_charset($conexion,"utf8");//esto para error de tildes o carácteres al mostrar
        
        //si se omite en la instruccion inicial la base de datos se puede 
        ingresar de la siguiente forma
        mysqli_select_db($conexion,$db_nombre) or die ("no se encuentra la BBDD");
        */

        //consulta
        $consulta="SELECT * FROM DATOSUSUARIOS";
        $resultados=mysqli_query($conexion,$consulta);
        //permite acceder a la primera linea de registros del resultado y lo almacena en una array ej$fila
      /*  $fila=mysqli_fetch_row($resultados);

        //consulta el array
        echo $fila[0] . " ";
        echo $fila[1] . " ";

        //para almacenar todos los registros se recorre el array
        $registros=1;// mientras sepamos en número de registros
        while ($registros<=2){
            $fila=mysqli_fetch_row($resultados);

            echo $fila[0] . " ";
            echo $fila[1] . " ";
            echo"<br>";
            $registros++;
        }    */
     
        //opcion de recorrer array cuando no sabemos el limite de filas
        while (($fila=mysqli_fetch_row($resultados))==true){
            echo $fila[0] . " ";
            echo $fila[1] . " ";
            echo"<br>";
            
        }    
        //cerrar conexion
        mysqli_close($conexion);

    ?>
</body>
</html>