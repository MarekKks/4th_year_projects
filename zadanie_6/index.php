<?php

error_reporting(E_ERROR | E_PARSE);

$linky = ['https://www.learn2code.sk/', 'https://www.centrum.sk/', 'https://www.google.sk/?hl=sk', 'https://www.github.com/', 'https://www.sme.sk/', 'https://www.mall.sk/', 'https://webmail3.webglobe.sk/'];


foreach ($linky as $link) {    
    echo '<a href="'.$link.'">';
    $link = trim($link, '/');  
    $link = preg_replace( "#^[^:/.]*[:/]+#i", "", $link );
    $link = preg_replace('/^www\./', '',$link);
    $link = preg_replace('/.sk/', '', $link);
    $link = preg_replace('/.webglobe/', '', $link);
    $link = preg_replace('/.com/', '', $link);
    $link = preg_replace('/hl/', '', $link);
    $link = preg_replace('/\\?.*/', '', $link);
    $link = str_replace("/", "", $link);
    $link = ucfirst($link);
    echo $link.'</a>';
    echo '<br>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Form</title>
</head>
<body>

<form action="index.php" method="post">
    <label for="a">A:</label>
    <input type="number" id="a" name="a"><br><br>
    
    <label for="b">B:</label>
    <input type="number" id="b" name="b"><br><br>
    
    <label for="c">C:</label>
    <input type="number" id="c" name="c"><br><br>
    
    <input type="submit" value="Submit">
</form>

</body>
</html>



<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
    echo "Yes, this is a triangle!";
} else{
    echo "no triangle :O";
}


?>