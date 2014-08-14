<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Limelight|Flamenco|Federo|Yesteryear|Josefin Sans|Spinnaker|Sansita One|Handlee|Droid Sans|Oswald:400,300,700" media="screen" rel="stylesheet" type="text/css" />
        <link href="bootstrap/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="bootstrap/css/bootstrap-responsive.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="bootstrap/css/common.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="bootstrap/css/fontawesome.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="bootstrap/css/project.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="bootstrap/css/tour.css" media="screen" rel="stylesheet" type="text/css" />

        <title>Cifra de César - Segurança de Informação 2014.2</title>
    </head>

    <body>
        <div id="absolute-wrapper">
            <a class="brand" href="#"> <i class="icon icon-bolt"></i>Cifra de César - Segurança de Informação 2014.2</a>
            <form action="process-request.php" method="POST">                
                <label class="control-label control-label-1 control-label-3">Texto para decifrar:</label>
                <textarea name="texto-para-decifrar" class="input-xxlarge pull-center input-xxlarge-1" placeholder="Texto para decifrar"></textarea>
                <label class="control-label control-label-1 control-label-2">Texto decifrado:</label>
                <textarea name="texto-decifrado" class="input-xxlarge pull-center input-xxlarge-2" placeholder="Texto decifrado"><?php echo $_SESSION["resposta"];
$_SESSION["resposta"] = ""; ?></textarea>
                <label class="control-label control-label-2 control-label-4">Tamanho da chave:</label>
                <input class="textinput" type="text" placeholder="Tamanho da chave" name="tamanho-chave" required>
                <button type="submit" class="btn btn-primary btn-large">Cifrar!</button>
            </form>
        </div>
    </body>

</html>