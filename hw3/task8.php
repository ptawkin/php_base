<?php

$cityArray = [
    'Московская область' => [
        'Москва',
        'Зеленоград',
        'Клин'
    ],
    'Ленинградская область' => [
        'Санкт-Петербург',
        'Всеволожск',
        'Павловск',
        'Кронштадт'
    ]
];

foreach ($cityArray as $region => $items) {

    echo $region . ':<br>';

    foreach ($items as $city) {

        if (substr($city, 0, 2) == 'К') {

            echo ' - ' . $city . '<br>';

        }
    }
}