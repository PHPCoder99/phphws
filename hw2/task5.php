<?php

function power($val, $pow) {
    if ($pow == 1) {
        return $val;
    }
    return $val*power($val, $pow - 1);
}

var_dump(power(2, 5));