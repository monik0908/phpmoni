<style>
    .resultado{
        color: #F00;
        font-weight:bold;
        font-size:32px;
    }
</style>


<?php
        if(isset($_POST["button"])){
            $numero1=$_POST["num1"];            
            $numero2=$_POST["num2"];
            $operacion=$_POST["operacion"];

            calcular($operacion);
        }//cerramos este if que asigna los valores de las variables
        //tambien llama a la funcion creada

        function calcular($calculo){//se asigna $calculo para que obtenga la operacion seleccionada y la compare
        
            if(!strcmp("suma",$calculo)){
                global $numero1;//se usa global para obtener el valor externo de la variable
                global $numero2;
                $resultado=$numero1+$numero2;
                echo "<p class='resultado'> El resultado es: $resultado</p>";
            }
            if(!strcmp("resta",$calculo)){
                global $numero1;
                global $numero2;
                echo "El resultado es: " . ($numero1-$numero2);
            }
            if(!strcmp("Multiplicación",$calculo)){
                global $numero1;
                global $numero2;
                echo "El resultado es: " . ($numero1*$numero2);
            }
            if(!strcmp("División",$calculo)){
                global $numero1;
                global $numero2;
                echo "El resultado es: " . ($numero1/$numero2);
            }
            if(!strcmp("Módulo",$calculo)){
                global $numero1;
                global $numero2;
                echo "El resultado es: " . ($numero1%$numero2);
            }


        }

    ?>