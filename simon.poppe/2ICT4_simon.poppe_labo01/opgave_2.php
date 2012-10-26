<?php
/*
 * author: simon poppe
 */


// array1 6 elementen indexen 0-5 waarden 1-6 via for loop
$array1;

for($i = 0; $i<6; $i++) {
    $array1[$i] = $i + 1;
}

echo '$array1: ' . PHP_EOL; // eerst naam array afdrukken en dan de var_dump doen
var_dump($array1);


//array2 6 elementen indexen 0-5 even en oneven(odd)
$array2;
for($i = 0; $i<6; $i++){
    $array2[$i] = ($i % 2 == 0 ? 'even' : 'odd');
}

echo '$array2: ' . PHP_EOL; // eerst naam array afdrukken en dan de var_dump doen
var_dump($array2);

//array3 26 elementen alle waarden van de letters van het alfabet
$array3;
for($i = 0; $i<26; $i++){
    $array3[$i] = chr($i + 65);
}

echo '$array3: ' . PHP_EOL; // eerst naam array afdrukken en dan de var_dump doen
var_dump($array3);


echo 'string alfabet met komma\'s tussen' . PHP_EOL; 
echo implode(',', $array3);
?>
