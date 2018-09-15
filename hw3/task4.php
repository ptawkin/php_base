<?php

/*Объявить массив, индексами которого являются буквы русского языка,
а значениями – соответствующие латинские буквосочетания
(‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк.*/

$translitAlph = [
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ё' => 'yo',
    'ж' => 'zh',
    'з' => 'z',
    'и' => 'i',
    'й' => 'j',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'h',
    'ц' => 'c',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'shch',
    'ъ' => '\'',
    'ы' => 'y',
    'ь' => '\'',
    'э' => 'eh',
    'ю' => 'yu',
    'я' => 'ya'
];


function transliter($string, $translitAlph) {
    //разбить строку на символы - массив $stringArr
    //найти соответствие $stringArr[val] и $translitAlph[key] (обходы массивов)
    //заменить значения $stringArr[val] на $translit[key]
    //склеить новую строку

    $string = mb_strtolower($string);
    $newStringArr = [];

    $stringArr = preg_split('//u', $string, -1,PREG_SPLIT_NO_EMPTY);

    foreach ($stringArr as $key => $value) {

        foreach ($translitAlph as $T_key => $T_value) {

            if ($value == $T_key) {

                $value = $T_value;

            }
        }

        array_push($newStringArr, $value);
    }

    $newString = implode($newStringArr);

    echo $newString;

}

transliter('Надо самоорганизацию прокачать, чтоб все как надо было', $translitAlph);

