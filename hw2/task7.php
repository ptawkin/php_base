<?php

function mytime() {
    date_default_timezone_set('Europe/Moscow');

    $hour = date('H');
    $min = date('i');

    if ($hour % 10 == 1 && $hour != 11) {
        echo $hour . " час" . " ";
    } else if ($hour % 10 <= 0 || $hour % 10 >= 5 && $hour % 10 <= 9 || $hour >= 11 && $hour < 20) {
        echo $hour . " часов" . " ";
    } else {
        echo $hour . " часа" . " ";
    }

    if ($min % 10 == 1 && $min != 11) {
        echo $min . " минута" . " ";
    } else if ($min % 10 <= 0 || $min % 10 >= 5 && $min % 10 <= 9 || $min >= 11 && $min < 20) {
        echo $min . " минут" . " ";
    } else {
        echo $min . " минуты" . " ";
    }
    return;
}

mytime();