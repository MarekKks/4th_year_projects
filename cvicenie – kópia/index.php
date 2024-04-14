<?php

echo '<h1>Úloha1</h1>';
$meno = "";
$arr = ["jana", "peter", "jano", "marek", "juraj"];
unset($arr[3]);

echo '<pre>';
print_r($arr);
echo '</pre>';  

echo '<h1>Úloha 2</h1>';
$meno = "";
$arr1 = ["jana", "peter", "jano", "marek", "juraj"];

$arrLength = count($arr1);
echo $arrLength;

echo '<h1>Úloha 3</h1>';
$arr2 = ["jana", "peter", "jano", "marek", "juraj"];
sort($arr2);
echo '<pre>';
print_r($arr2);
echo '</pre>';   

echo '<h1>Úloha 4</h1>';
$arr3 = ["jana", "peter", "jano", "marek", "juraj"];
array_push($arr3, "Linda");
echo '<pre>';
print_r($arr3);
echo '</pre>';  

echo '<h1>Úloha 5</h1>';
$arr4 = ["jana", "peter", "jano", "marek", "juraj"];
array_unshift($arr4,"Alesa");
echo '<pre>';
print_r($arr4);
echo '</pre>';  

?>