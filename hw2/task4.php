<?php

$a = 6;
$b = 3;

calc($a, $b);
calc($a, $b, "*");
calc($a, $b, "^");
calc($a, $b, "v");
calc($a, $b, "/");
calc($a, $b, "-");
echo "<br>";

function calc(int $a, int $b, string $action = "+") {
    switch ($action) {
        case "+":
            echo "$a + $b = " . ($a + $b) . "<br>";
            break;
        case "-":
            echo "$a - $b = " . ($a - $b) . "<br>";
            break;
        case "*":
            echo "$a * $b = " . ($a * $b) . "<br>";
            break;
        case "/":
            echo "$a : $b = " . ($a / $b) . "<br>";
            break;
        case "^":
            echo "$a ^ $b = " . pow($a, $b) . "<br>";
            break;
        default:
            echo "Такого действия нет в нашем калькуляторе!<br>";
    }
}