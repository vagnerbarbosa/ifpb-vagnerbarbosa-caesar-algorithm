<?php

include_once ("./algorithm/CaesarAlgorithm.php");
session_start();

$encriptText = $_POST["texto-para-cifrar"];
$dencriptText = $_POST["texto-para-decifrar"];
$lenghtKey = $_POST["tamanho-chave"];

$caesarAlrotithm = new CaesarAlgorithm();

if ($dencriptText == NULL) {
    $_SESSION["resposta"] = $caesarAlrotithm->caesarCipherEncript($encriptText, $lenghtKey);
    header("Location: http://localhost/vagnerbarbosa-caesar-algorithm/index.php");
} else {
    $_SESSION["resposta"] = $caesarAlrotithm->caesarCipherDecript($dencriptText, $lenghtKey);
    header("Location: http://localhost/vagnerbarbosa-caesar-algorithm/index2.php");
}




