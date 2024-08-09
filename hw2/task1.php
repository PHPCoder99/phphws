<?php
function doArithmetic($num1, $num2, $op) {
    if ($op == '+') {
        return $num1 + $num2;
    } elseif ($op == '-') {
        return $num1 - $num2;
    } elseif ($op == '*') {
        return $num1 * $num2;
    } elseif ($op == '/') {
        if ($num2 == 0) {
            return 0;
        }
        return $num1 / $num2;
    }
}

var_dump(doArithmetic(1, 2, '+'));
var_dump(doArithmetic(3, 5, '-'));
var_dump(doArithmetic(3, 4, '*'));
var_dump(doArithmetic(4, 2, '/'));
var_dump(doArithmetic(4, 0, '/'));
