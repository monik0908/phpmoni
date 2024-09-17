<?php
class Coche{
        
           //constructor despuesde la version 8.0
             public function __construct(
                private int $ruedas,
                private string $color,
                private int  $motor
                ){}

               // ejemplo getter
            public function getRuedas(){
                    return $this->ruedas;
                }

                // ejemplo setter
            public function setRuedas($ruedas){
                $this->ruedas=$ruedas;
            }
                
        //métodos o funciones
        function arrancar(){
            echo "Estoy arrancando";
        }
        function girar(){
            echo "Estoy girando <br>";
        }
        function frenar(){
            echo "Estoy frenando";
        }
    }

    //----------------------------------------
    class Camion{
        
        //constructor despuesde la version 8.0
          public function __construct(
             private int $ruedas,
             private string $color,
             private int  $motor
             ){}

            // ejemplo getter
         public function getRuedas(){
                 return $this->ruedas;
             }

             // ejemplo setter
         public function setRuedas($ruedas){
             $this->ruedas=$ruedas;
         }
             
     //métodos o funciones
     function arrancar(){
         echo "Estoy arrancando";
     }
     function girar(){
         echo "Estoy girando <br>";
     }
     function frenar(){
         echo "Estoy frenando";
     }
 }

    ?>
