<?php
/*
 * author: simon poppe
 */

var_dump($argv);        //checken welke waarden er meegegeven worden
if(sizeof($argv)>1){    //als er meer dan een argument is voer uit met eerst argument
    echo bepaalLeeftijd($argv[1]);
}
else{
    echo bepaalLeeftijd(getLine('geef je geboorte datum in(jaar-maand-dag): '));
}

/**
 * bepaalt de leeftijd door het verschil tussen de ingegeven geboortedatum
 * en de datum vandaag te berekenen.
 * 
 * @param string $jaar geboortedatum
 * 
 * @return dateInterval met het verschil als waarde
 */
function bepaalLeeftijd($jaar) {
    $ditJaar = new DateTime(date('c'));
    $geboorteJaar = new DateTime($jaar);
    echo 'dit jaar: ' . $ditJaar->format('Y-m-d H:i:s') . PHP_EOL;
    echo 'geboorte jaar: ' . $geboorteJaar->format('Y-m-d H:i:s') . PHP_EOL;
    $interval = $geboorteJaar->diff($ditJaar);
    echo "verschil " . $interval->y . " jaren, " . $interval->m." maanden en ".$interval->d." dagen " . PHP_EOL;
    return 'verschil: ' . $interval->format('%Y-%M-%D %H:%I:%S');
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