<!DOCTYPE html>
<html>
    <head>
        <meta charset="windows-1252">
        <title></title>
    </head>
    <body>
        <?php
        include_once ("./algorithm/CaesarAlgorithm.php");
        $caesar = new CaesarAlgorithm();
        echo $caesar->caesarCipherEncript("Vagner", "3");
        echo "-------------";
        echo $caesar->caesarCipherDecript("YDJQHU", "3");        
        echo "-------------";        
        ?>
    </body>
</html>
