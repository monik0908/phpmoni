<style>
.h1{
    align="center"
}

table{
    align="center"
    background-color:#FFC;
    padding:5px;
    border:#666 5px solid;
}

.no_validado{
    font-size:18px;
     color:#f00;
     font-weight:bold;
}
.validado{
    font-size:18px;
    color:#0c3;
    font-weight:bold;
}

</style>
<?php
    if(isset($_POST["button"])){
        $edad=$_POST["edad"];

        //ejeplo condicional sencillo
       /* if($edad<=18){
            echo "Eres menor de edad";
        }else if($edad<=40){
            echo "Eres joven";
        }else if($edad<=65){
            echo "Eres maduro";
        }else{
            echo "cuidate";
        }*/
       
        //operador ternario
        echo $edad<18 ? "eres menor de edad" : "Puedes acceder";
        //p0uedes guardar la informacion en una variable
        $resultado=$edad<18 ? "eres menor de edad" : "Puedes acceder";
        //e imprimir resultado
        echo $resultado;
        
        //operadores lógicos
        $nombre=$_POST["nombre_usuario"];
        $contraseña=$_POST["contra"];
        $resultado= $nombre=="Juan" && $contraseña=="1234" ? "puedes acceder" : "No puedes accceder";  }
        echo "<br>" . $resultado . "<br>";


    /// switch
        switch($nombre){
            case "Juan":
                echo "Usuario autorizado. Hola Juan";
                break;
            case "Maria":
                    echo "Usuario autorizado. Hola Maria";
                break;
            case "Pedro":
                    echo "Usuario autorizado. Hola Pedro";
                break;
            default:
            echo "Usuario no autorizado";
        }
        echo "<br>";

        //dos condiciones
        switch(true){ // true
            case $nombre=="Juan" && $contraseña=="1234":
                echo "Usuario autorizado. Hola Juan";
                break;
            case $nombre=="Maria" && $contraseña=="5555":
                    echo "Usuario autorizado. Hola Maria";
                break;
            case $nombre=="Pedro" && $contraseña=="1111":
                    echo "Usuario autorizado. Hola Pedro";
                break;
            default:
            echo "Usuario no autorizado";
        }

?>
        