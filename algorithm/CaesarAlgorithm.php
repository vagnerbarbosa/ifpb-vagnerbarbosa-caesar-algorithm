<?php

/**
 * Classe de implementação dos algoritmos de Cesar 
 * tanto para encriptação quanto desencriptação
 *
 * @author vagner
 * @contato contato@vagnerbarbosa.com
 */
class CaesarAlgorithm {

    function __construct() {
        
    }

    public function caesarCipherEncript($planText, $key) {
        $CaesarCipher = "";
        for ($i = 0, $l = strlen($planText); $i < $l; ++$i) {
            $asciiValue = ord($planText[$i]);
            if (97 <= $asciiValue && $asciiValue < 123) {
                $CaesarCipher .= chr(($asciiValue + $key + 7) % 26 + 97);
            } else if (65 <= $asciiValue && $asciiValue < 91) {
                $CaesarCipher .= chr(($asciiValue + $key + 13) % 26 + 65);
            } else {
                $CaesarCipher .= $planText[$i];
            }
        }
        return $CaesarCipher;
    }

    public function caesarCipherDecript($planText, $key) {
        $CaesarCipher = "";
        for ($i = 0, $l = strlen($planText); $i < $l; ++$i) {
            $asciiValue = ord($planText[$i]);
            if (97 <= $asciiValue && $asciiValue < 123) {
                $CaesarCipher .= chr(($asciiValue - $key + 7) % 26 + 97);
            } else if (65 <= $asciiValue && $asciiValue < 91) {
                $CaesarCipher .= chr(($asciiValue - $key + 13) % 26 + 65);
            } else {
                $CaesarCipher .= $planText[$i];
            }
        }
        return $CaesarCipher;
    }

}
