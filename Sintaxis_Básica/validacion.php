<style>
        h1{
            text-align:center
        }
        table{
            background-color:#FFC;
            padding:1px;
            border:#644 5px;
        }
        
        .no_validado{
            font-size:11px;
            color:#F00;
            font-weight:bold;
        }
        .validado{
            font-size:11px
            color:#OCJ;
            font-weight:bold;
        }
        </style>
<?php
    
    if(isset($_POST["enviando"])){
        //isset comprueba si submit  se ha ejecutado y usamos enviado porrque fue el nombre que se dio
        $usuario=$_POST["nombre_usuario"];
        $edad=$_POST["edad_usuario"];

        if($usuario=="Juan" && $edad==18){
            echo "<p class='validado'>puedes entrar </p>";
        }else{
            echo "<p class='no_validado'>". "No puedes entrar</p>";
        }
    }
?>