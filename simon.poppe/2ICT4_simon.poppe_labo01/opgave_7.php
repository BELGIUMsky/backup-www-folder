<?php
/*
 * author: simon poppe
 */

var_dump($argv);        //checken welke waarden er meegegeven worden
if(sizeof($argv)>1){    //als er meer dan een argument is voer uit met eerst argument
    caesarCipher($argv[1]);
}

/**
 * Caesar Cipher encryptie
 * 
 * @param int $offset de aantal plaatsen de letters moeten opschuiven
 */
function caesarCipher($offset){
    while(!feof(STDIN)) {   // loop blijven uitvoeren tot op het einde van het bestand
        $lijn = trim(fgets(STDIN)); // leest een lijn in
        for ($i = 0; $i < strlen($lijn); $i++){ // gaat elk karakter af in de lijn
            $char = ord($lijn[$i]); // maakt van het respectivelijke karakter de ascii waarde
            $char += $offset;   // telt bij die waarde de offset bij
            echo chr($char);    // vormt de ascii waarde terug om naar een karakter en toont het op het scherm.
        }
        echo PHP_EOL; // na elke gelezen lijn beginnen op nieuwe lijn
    }
}
?>