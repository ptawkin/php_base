<?php

/*Объединить две ранее написанные функции в одну, которая получает строку на русском языке,
производит транслитерацию и замену пробелов на подчеркивания
(аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).*/


//str_replace(' ', '_', $string);



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

        if ($value == ' ') {

            $value = '_';

        } elseif (isset($translitAlph[$value])) {

            $value = $translitAlph[$value];

        }

//        array_push($newStringArr, $value);
        $newStringArr[] = $value;
    }

    $newString = implode($newStringArr);

    echo $newString;

}

transliter('В голове моей опилки не-бе-да', $translitAlph);

