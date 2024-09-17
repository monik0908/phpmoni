<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Coche{
        //variables
       /* private int $ruedas;
        private string $color;
        private int  $motor;*/

        /* otra forma de constructor
        public function __construct($ruedas,$color,$motor){
            $this->ruedas=$ruedas;
            $this->color=$color;
            $this->motor=$motor;
            }

            */


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
                
        /*constructor
        public function __construct() {
            $this->ruedas=4;
            $this->color="";
            $this->motor=1650;
        }*/
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

        //instanciar
        $mazda=new Coche(4,"azul",1650);// Esto da instancia inicial 
        $seat=new Coche(4,"rojo",1450);

        //usar funciones
        $mazda->girar();
        echo $mazda->getRuedas() . "\n";
        

?>
</body>
</html>