<?php

function area_volume ($num1, $num2, $num3) {

    $area = $num1 * $num2;
    $volume = $area * $num3;
    echo "The area of this box is $area" . "<br>";
    echo "The volume of this box is $volume";

}

area_volume(2, 7, 5);