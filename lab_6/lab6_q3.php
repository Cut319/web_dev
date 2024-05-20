<?php

    $width = 2;
    $length = 4;
    
    function calculateArea ($width, $length){
        return $width * $length;
    }

    echo"The area of a rectangle with a width of ".$width." and length of ".$length." is ".calculateArea($width, $length);

?>