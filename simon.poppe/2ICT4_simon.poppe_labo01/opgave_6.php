<?php
/*
 * author: simon poppe
 */

$timestamp = mktime(11, 45, 0, 12, 26, 83); // “26 december 1983, 11:45:00”


echo date('d F Y, H:i:s', $timestamp).PHP_EOL;  // timestamp zelf
echo date('F', $timestamp).PHP_EOL; // naam van de maand (in woorden)
echo date('l', $timestamp).PHP_EOL; // de dag van de week(in woorden)
echo date('D', $timestamp).PHP_EOL; // de dag van de week (kort, in woorden)
echo date('dmY', $timestamp).PHP_EOL; // de datum als "26121983"
echo date('ymd', $timestamp).PHP_EOL; // de datum als "831126"
echo date('h:i A', $timestamp).PHP_EOL; // de datum als "11:45 AM"
echo date('t', $timestamp).PHP_EOL; // het aantal dagen in die maand
echo date('j F, Y', $timestamp).PHP_EOL; // de datum als "26 december, 1983"
echo date('W', $timestamp).PHP_EOL; // het weeknummer waarin die datum valt
?>