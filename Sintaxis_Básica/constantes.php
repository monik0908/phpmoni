<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        define('AUTOR','Juan');
        define("AUTOR","MARIA");//no me permitio redefinir ni con true como lo explica el video
        echo "El autor es : " . AUTOR;

?>
</body>
</html>