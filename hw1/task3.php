<?php
$x = 3;
$y = 2;
$x ^= $y ^= $x ^= $y;
var_dump($x);
var_dump($y);