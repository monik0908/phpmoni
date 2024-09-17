<?php
        

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
            if(!strcmp("Incremento",$calculo)){
                global $numero1;
                $numero1++;
                $resultado=$numero1;
                echo "<p class='resultado'> El resultado es: $resultado</p>";
            }
            if(!strcmp("Decremento",$calculo)){
                global $numero1;
                $numero1--;
             $resultado=$numero1;
                echo "<p class='resultado'> El resultado es: $resultado</p>";
            }


        }

    ?>