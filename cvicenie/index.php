<?php
$pole = ['lopta'=>30, 'sveter'=>4, 'mobil'=>50, 'nabijacka'=>60, 'chlieb'=>20];
asort ( $pole );
$item = current( $pole ); 

foreach($pole as $key => $value){
    if($item == $value){
        echo $key . " " . $value . "<br>";
    }
    else {
        echo '';
    }
}




