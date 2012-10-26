<?php
/*
 * author: simon poppe
 */


echo 'De lengte van de array: ' . PHP_EOL; //lengte van de array
var_dump(sizeof($_SERVER)); 
//var_dump(count($_SERVER));


echo 'Het eerste element van de array' . PHP_EOL; // eerste element van de array
var_dump(array_shift($_SERVER));
//var_dump(reset($_SERVER));
//var_dump(current($_SERVER));

echo 'De lengte van de array(zou met 1 verminderd moeten zijn)' . PHP_EOL; // terug lengte van de array
var_dump(sizeof($_SERVER));

echo 'De keys van de array' . PHP_EOL; // de array keys
var_dump(array_keys($_SERVER));

echo 'Een boolean die meldt of de key PHP_SELF in de array bestaat' . PHP_EOL; // bool die zegt of PHP_SELF in de array als key bestaat
var_dump(array_key_exists("PHP_SELF", $_SERVER));

echo 'De array, in gesorteerde volgorde' . PHP_EOL; // sorteren en afprinten
sort($_SERVER);
var_dump($_SERVER);

echo 'De array, in omgekeerd gesorteerde volgorde' . PHP_EOL; // omgekeerd sorteren en afprinten
arsort($_SERVER);
var_dump($_SERVER);
?>
