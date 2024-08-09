<?php

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case '+':
            return $arg1 + $arg2;
        case '-':
            return $arg1 - $arg2;
        case '*':
            return $arg1 * $arg2;
        case '/':
            return $arg2 == 0 ? 0 : $arg1 / $arg2;
    }
}

var_dump(mathOperation(1, 2, '+'));
var_dump(mathOperation(3, 5, '-'));
var_dump(mathOperation(3, 4, '*'));
var_dump(mathOperation(4, 2, '/'));
var_dump(mathOperation(4, 0, '/'));
