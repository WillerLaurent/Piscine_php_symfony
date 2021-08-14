#!/usr/bin/php
<?php

function ft_display($array, $end) {
    for ($k = 0; $k < count($array); $k++) {
        echo $array[$k];
        if (($k >= count($array) - 1) && $end == true) {
            break;
        } else {
            echo "\n";
        }
    }
}

$str = array();
$num = array();
$others = array();
for ($i = 1; $i < $argc; $i++) {
    $tab = explode(" ", $argv[$i]);
    for ($j = 0; $j < count($tab); $j++) {
        if (strlen($tab[$j]) > 0) {
            if (ctype_alpha($tab[$j])) {
                array_push($str, $tab[$j]);
            } elseif (ctype_digit($tab[$j])) {
                array_push($num, $tab[$j]);
            } else {
                array_push($others, $tab[$j]);
            }
        }
    }
}

usort($str, 'strnatcasecmp');
usort($num, 'strcmp');
usort($others, 'strcmp');
ft_display($str, false);
ft_display($num, false);
ft_display($others, true);

?>