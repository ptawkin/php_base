<?php

$number = 0;

do {

    if ($number == 0) {
        echo $number . ' - это ноль' . '<br>';
    } elseif ($number % 2 == 0) {
        echo $number . ' - это четное число' . '<br>';
    } else {
        echo $number . ' - это нечетное число' . '<br>';
    }

    $number++;

} while ($number < 11);