#!/usr/bin/php
<?php

function display_error() {
    echo "Syntax Error";
}

function find_sign($str) {
    $array_sign = array('+', '-', '*', '/', '%');
    for ($i = 0; $i < count($array_sign); $i++) {
        $pos = strpos($str, $array_sign[$i]);
        if ($pos != false) {
            return $array_sign[$i];
        }
    }
    return $pos;
}

if ($argc < 2) {
    echo "Incorrect Parameters";
    return;
}
$sign = find_sign($argv[1]);


if ($sign == false) {
    display_error();
    return;
}

$str = str_replace(" ","", $argv[1]);
$str2 = explode($sign, $str);
if (!ctype_digit($str2[0]) || !ctype_digit($str2[1])) {
    display_error();
    return;
}

if ($sign == '+') {
    $result = $str2[0] + $str2[1];
} elseif ($sign == '-') {
        $result = $str2[0] - $str2[1];
} elseif ($sign == '*') {
        $result = $str2[0] * $str2[1];
} elseif ($sign == '%') {
    $result = $str2[0] % $str2[1];
} else {
    $result = $str2[0] / $str2[1];
}

echo $result;

?>