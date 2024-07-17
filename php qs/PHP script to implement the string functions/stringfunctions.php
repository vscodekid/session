<?php

$text = "PHP is a back end programming language";
$stringLength = strlen($text);
echo "Length of '$text' is $stringLength <br><br>";

$stringUpper = strtoupper($text);
echo "The uppercase of '$text' is $stringUpper<br><br>";

$stringLower = strtolower($text);
echo "The lowercase of '$text' is $stringLower<br><br>";

echo substr($stringUpper, 0, 2) . "<br><br>";

echo str_replace("PHP", "Java", $stringLower) . "<br><br>";

echo str_replace("PHP programming", "Java programming", $text) . "<br><br>";

echo str_word_count($text) . "<br><br>";

$stringExplode = explode(" ", $text);
echo "Explode of '$text' is ";
print_r($stringExplode);
echo "<br><br>";

$sample1 = ucfirst($text);
echo "$sample1<br><br>";

echo ucfirst("PHP");

?>
