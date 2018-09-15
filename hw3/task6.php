<?php

/*В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP.
Необходимо представить пункты меню как элементы массива и вывести их циклом.
Подумать, как можно реализовать меню с вложенными подменю?
Попробовать его реализовать..*/

?>

<?php

$title = "php";
$header = 'php';
$paragraph = 'Hello world';
$year = date('Y');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
</head>
<body>

<h1>
    <?php
    echo $header;
    ?>
</h1>

<p>
    <?php
    echo $paragraph;
    ?>
</p>

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

    echo '<ul>';
    echo '<li>' . $region . ':</li><ul>';

    foreach ($items as $city) {

        echo '<li>' . $city . '</li>';

    }

    echo '</ul></ul>';
}

echo $year;

?>

</body>
</html>


