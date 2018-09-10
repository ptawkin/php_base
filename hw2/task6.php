<?php

function power($val, $pow) {
    $result = $val;

    for ($i = 1; $i <= $pow - 1; $i++) {
        $result = $result * $val;
    }
    return $result;
}

echo power(3,4) . "<br>";


function power_($val, $pow) {
    if ($pow === 0) {
        $result = 1;
    }
    if ($pow < 0) {
        $result = power(1 / $val, -$pow);
    }
    if ($pow > 1) {
        $result = $val * power_($val, $pow - 1);
    }
    return $result;
}

echo power_(3,-6) . "<br>";


