<?php

$name = 'Женя';
$age = 29;
date_default_timezone_set('Europe/Moscow');
$date = date('d-m-y H:i');

$string = 'Меня зовут $name.'
    . '<br>'
    . 'Через год мне будет '
    . ($age + 1)
    . ' лет, а еще через год '
    . ($age + 2)
    . ' год.'
    . '<br>'
    . 'На моих часах сейчас: '
    . $date;

echo $string . '<br>' . '<br>';

$string2 = str_replace(' ', '_', $string);

echo $string2 . '<br>' . '<br>';

?>