<?php

$a = rand();
$b = rand();
$c;

if ($a >= 0 && $b >= 0) {
    $c = $a - $b;
} else if ($a < 0 && $b < 0) {
    $c = $a * $b;
} else if ($a > 0 && $b < 0 || $a < 0 && $b > 0) {
    $c = $a + $b;
};

echo $c;
echo "<br>";