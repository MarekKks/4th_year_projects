
<form action="index.php" method="post">
<label for="cislo">ax2</label>
<input type="number" name="a" id="a" value="">
<label for="cislo">bx</label>
<input type="number" name="b" id="b" value="">
<label for="cislo">c</label>
<input type="number" name="c" id="c" value="">
<input type="submit" value="Odoslat">
<br>

<?php
function Diskriminant($a, $b, $c)
{
    $cislo = ($b * $b) - (4 * ($a * $c));
    echo 'Diskriminant = ' .$cislo.' ';
    $hodnota = $cislo;
    echo '<br>';
    if($cislo < 0)
    {
        echo 'nema riešenie';
    }
    elseif ($cislo > 0)
    {
        $x1 = (-$b  - sqrt($hodnota)) / 2 * $a ; 
        $x2 = (-$b + sqrt($hodnota)) / 2 * $a ; 
        echo 'koreň 1 = ' .$x1;
        echo '<br>';
        echo 'koreň 2 = '. $x2;
    } elseif ($cislo == 0)
    {
        $x1 = (-$b - sqrt($hodnota)) / 2 * $a ; 
        $x2 = (-$b + sqrt($hodnota)) / 2 * $a ; 

        echo 'koreň je '. $x1;
    }
}



?>
<?php

if(isset($_POST['a'], $_POST['b'], $_POST['c']))
{
   
   echo Diskriminant($_POST['a'], $_POST['b'], $_POST['c']);
} 
?>
