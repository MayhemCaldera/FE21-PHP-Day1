<?php

function timecalc ($num) {

    $hour = floor($num / 60);
    $min = $num % 60;
    echo "$num minutes = $hour hour(s) and $min minute(s)";

}

timecalc(200);