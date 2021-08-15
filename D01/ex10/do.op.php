#!/usr/bin/php
<?php

if ($argc != 4) {
    echo "Incorrect Parameters";
    return;
}

$tab = array();
for ($i = 1; $i < 4; $i++) {
    $param = str_replace(" ", "", $argv[$i]);
    $param = str_replace("\t", "", $param);
    array_push($tab, $param);
}


if ($tab[1] == '+') {
    $result = $tab[0] + $tab[2];
} elseif ($tab[1] == '-') {
        $result = $tab[0] - $tab[2];
} elseif ($tab[1] == '*') {
        $result = $tab[0] * $tab[2];
} elseif ($tab[1] == '%') {
    $result = $tab[0] % $tab[2];

} else {
    $result = $tab[0] / $tab[2];
}

echo $result;

?>