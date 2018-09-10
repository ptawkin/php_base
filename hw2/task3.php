<?php

function plus($arg1, $arg2) {
    return $arg1 + $arg2;
};

function minus($arg1, $arg2) {
    return $arg1 - $arg2;
};

function divide($arg1, $arg2) {
    return $arg1 / $arg2;
};

function multiply($arg1, $arg2) {
    return $arg1 * $arg2;
};

function mathOperation($arg1, $arg2, $operation) {
    $result = 0;

    switch ($operation) {
        case '+':
            $result = plus($arg1, $arg2);
            break;
        case '-':
            $result = minus($arg1, $arg2);
            break;
        case '/':
            if ($arg2 != 0) {
                $result = divide($arg1, $arg2);
            } else {
                $result = 'Введите значение $arg2 отличное от нуля';
            }
            break;
        case '*':
            $result = multiply($arg1, $arg2);
            break;
    }

    return $result;
}
echo mathOperation(10, 6, "/") . "<br>";