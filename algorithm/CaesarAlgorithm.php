<?php

/**
 * Description of CaesarAlgorithm
 *
 * @author vagner
 */
class CaesarAlgorithm {

    function __construct() {
        
    }

    public function caesarCipherEncript($planText, $key) {
        $cipherText = "";

        if ($key < 0) {
            $key *= -1;
        }

        for ($i = 0; $i < strlen($planText); $i++) {
            $upperText = strtoupper($planText{$i});

            if (($upperText >= "A") && ($upperText <= "Z")) {
                $cipherText = $cipherText . (chr(ord($upperText) + $key));
            } else {
                $cipherText = $cipherText . " ";
            }
        }
        return $cipherText . "\n";
    }

    public function caesarCipherDecript($planText, $key) {
        $cipherText = "";

        if ($key < 0) {
            $key *= -1;
        }

        for ($i = 0; $i < strlen($planText); $i++) {
            $upperText = strtoupper($planText{$i});

            if (($upperText >= "A") && ($upperText <= "Z")) {
                $cipherText = $cipherText . (chr(ord($upperText) - $key));
            } else {
                $cipherText = $cipherText . " ";
            }
        }
        return $cipherText . "\n";
    }

}
