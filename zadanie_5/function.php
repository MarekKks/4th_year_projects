<?php
function countImage($image) {
    $zaklad = 0;
    foreach($image as $y)
    {
        $zaklad++;   
    }   
    return $zaklad;
    }
?>