<?php

function resizeImg($fileMinName) {
    // тип содержимого
    header('Content-Type: image/jpeg');

// задание максимальной ширины и высоты
    $width = 200;
    $height = 200;


// получение новых размеров
    list($width_orig, $height_orig) = getimagesize($fileMinName);

    $ratio_orig = $width_orig/$height_orig;

    if ($width/$height > $ratio_orig) {
        $width = $height*$ratio_orig;
    } else {
        $height = $width/$ratio_orig;
    }

// ресэмплирование
    $image_p = imagecreatetruecolor($width, $height);
    $image = imagecreatefromjpeg($fileMinName);
    imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

// вывод
    imagejpeg($image_p, null, 100);

    imagedestroy($image);
    imagedestroy($image_p);

    return true;
}

