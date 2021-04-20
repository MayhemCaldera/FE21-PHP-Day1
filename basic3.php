<?php
function sum_avg ($num1, $num2, $num3) {
    $sum = $num1 + $num2 + $num3;
    $avg = $sum / 3;
    echo "The sum from $num1, $num2 and $num3 is $sum" . "<br>";
    echo "The average from $sum is $avg";
}

sum_avg(3,4,5);