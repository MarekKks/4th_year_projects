
<form action="index.php" method="post">
<label for="cislo">faktorial cisla</label>
<input type="number" name="cislo" id="cislo" value="">
<input type="submit" value="Odoslat">
<br>

<?php
function factorial($cislo)
{
    if ($cislo <= 1) {
        echo $cislo. " = ";
        return 1;
    } else {
        echo $cislo. " * ";
        $cislo-1; 
        return $cislo * factorial($cislo - 1);
    }
}



?>
<?php

if(isset($_POST['cislo']))
{
   
   echo factorial($_POST['cislo']);
} 
?>
