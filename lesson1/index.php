
<?php
header("Content-type: text/html; charset=utf-8");

E_
/*
$var = 5;
$var2 = &$var;
$var++;

define('FIRST_CONSTANT', 1123);
var_dump($var, $var2);
var_dump(FIRST_CONSTANT);*/
/*
$integer = 10;
$string1 = 'это \nстрока';
$string2 = "это \nтоже {$integer} строка";
$float = 0.12125;
$boolean = true;

$resource = fopen("test.txt", "a+");
$array = ['asfhf', 123213, 'sdfkj'];
$object = new stdClass();
$null = null;*/

/*
$integer = 10;
$string = '10sdjhsg';
$res = $integer + $string;*/

//Математические операции
$a = 5;
$b = 7;
/*
var_dump($a + $b);
var_dump($a - $b);
var_dump($a * $b);
var_dump($a / $b);
var_dump($a % $b);
var_dump($a ^ $b);
*/
$a = $a + 2;
$a += 2;


//$a++;
//$a--;
//var_dump(++$a);

//Операции сравнения

/*
var_dump($a > $b);
var_dump($a < $b);
var_dump($a >= $b);
var_dump($a <= $b);
var_dump($a == $b);
var_dump($a === $b);
var_dump($a != $b);
var_dump($a !== $b);
var_dump($a <=> $b);
*/
/*
$string1 = "hello, ";
$string2 = "world!";
echo $string1 . $string2;

$html = '';
$html .= '<p>sjhj</p>';
*/

// Логические операции
$a = true;
$b = false;
//умножение и коньюнкция
var_dump($a && $b);
//сложенние или дизьюнкциия
var_dump($a || $b);
//Иключающее или
var_dump($a XOR $b);
//отрицание
var_dump(!$a);

$alarmOn;
$openWindow;

var_dump($a & $b);
var_dump($a | $b);