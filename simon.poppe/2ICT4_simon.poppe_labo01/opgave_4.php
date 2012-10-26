<?php
/*
 * author: simon poppe
 */

var_dump($argv);        //checken welke waarden er meegegeven worden
if(sizeof($argv)>1){    //als er meer dan een argument is voer uit met eerst argument
    var_dump(Fibonacci($argv[1]));
}
else{
    var_dump(Fibonacci(getLine('geef een getal in:')));
    //echo 'geef een getal in: ' . PHP_EOL; //zoniet vragen naar een getal
    //var_dump(Fibonacci(fgets(fopen ('php://stdin','rb'))));
}

/**
 * geeft de fibonacci reeks
 * 
 * @param int $aantal het aantal cijfers je wil in de fibonacci reeks
 * 
 * @return array de fibonacci reeks als array van integers
 */
function fibonacci($aantal) {   //de fibonacci functie
    $array = array(0,1);
    
    for($i = 2; $i<$aantal; $i++){
        $size = sizeof($array); //grootte array
        $array[$i] = $array[$size-2] + $array[$size-1]; // voorlaatste waarde en laatste waarde optellen
    }
    return $array;
}

/**
 * lees een lijn in
 * 
 * @param string $question  de vraag waarop je een antwoord wilt
 * 
 * @return (het type dat ingetypt wordt) geeft het antwoord terug van de vraag
 */
function getLine($question = '') {
    if (!function_exists('readline')) { 
        echo $question . ' ';
        return stream_get_line(STDIN, 1024, PHP_EOL);
    } else {
        return readline($question . ' ');
    }
}
?>