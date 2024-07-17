<?php

$sample=array("Arun"=>"5000","Arjun"=>"10000","Abhishek"=>"8000");
echo "associative array before sorted<br>";

print_r($sample);

echo "<br><br>";
echo "associative array after sorted : <br><br>";

echo "Sort the array by keys in ascending order <br><br>";

ksort($sample);
print_r($sample);
echo "<br><br>";
echo "Sort the array by value in ascending order <br><br>";

asort($sample);
print_r($sample);

?>