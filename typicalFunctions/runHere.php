<?php

/**
 * In this file you must evaluate the result of the functions you 
 * built in typicalFunctions\typicalFunctions.php 
 * 
 * Good luck!
 */

$input = array(5,43,56,37);
$tipical = new TypicalFunctions();
$result = $tipical->getSuperArray($input);
print_r($result);

$tipical = new TypicalFunctions();
$input2 = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
$result = $tipical->capitalizeFirstLetters($input2);
print $result;

$input = array("Locomotive","Ant","Toucan","Dolphin","Stadium","Tree");
$result = $tipical->getShortestLongestValue($input);
print($result);


$input = array("Italia" =>"Roma", "Belgium" => "Brussels", "Ireland" => "Dublin" ,"Greece" => "Athens");
$result = $tipical->getCapitalCities($input);

$input = 25;
$result = $tipical->getSumPrimeNumbers($input);
print($result);