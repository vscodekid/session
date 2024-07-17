<?php
$array = array(10, 20, 30, 40, 50);
$insertpos = 2;
$insertele = 25;

$arraysize = count($array);

echo "Original array: ";
echo"<br>";

for ($i = 0; $i < $arraysize; $i++) {
    echo $array[$i] . " ";
}
echo"<br><br>";
echo "Array after inserting an element at position 2: ";
echo"<br>";

for ($i = $arraysize - 1; $i >= $insertpos - 1; $i--) {
    $array[$i + 1] = $array[$i];
}

$array[$insertpos - 1] = $insertele;
$arraysize++;

for ($i = 0; $i < $arraysize; $i++) {
    echo $array[$i] . " ";
}
echo"<br><br>";
$delpos = 3;
echo "Deleted element from the array at position 3:<br>";

for ($i = $delpos - 1; $i < $arraysize - 1; $i++) {
    $array[$i] = $array[$i + 1];
}

$arraysize = $arraysize - 1;

for ($i = 0; $i < $arraysize; $i++) {
    echo $array[$i] . " ";
}
?>
