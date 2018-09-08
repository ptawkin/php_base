<?php
// task 3
echo "<span>task 3</span><br>";

// Присваиваем переменной значение типа integer.
$a = 5;

// Присваиваем переменной значение типа string.
$b = '05';


// В виду того6 что сравнение нестрогое, то строка приведется к числу и будет 5 = 5.
// В случае строго сравнения было бы false.

var_dump($a == $b); // Почему true?
echo "<br>";

// При преобразовании из string в int нули отбрасываются интерпретатором.
var_dump((int)'012345'); // Почему 12345?
echo "<br>";


// При строгом сравнении учитываются не трлько значение, но и тип.
var_dump((float)123.0 === (int)123.0); // Почему false?
echo "<br>";


// При приведении строки к числу она будет иметь значение 0, так как в ее начале иных чисел нет. 0 === 0.
var_dump((int)0 === (int)'hello, world'); // Почему true?
echo "<br><br>";


// task 5
echo "<span>task 5</span><br>";

$a = 5;
$b = 100;

echo "$a, $b"."<br>";

$a += $b;
$b = $a - $b;
$a -= $b;

echo "$a, $b"."<br><br>";

