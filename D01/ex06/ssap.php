#!/usr/bin/php
<?php

$tab2 = array();
for ($i = 1; $i < $argc; $i++) {
    $tab = explode(" ", $argv[$i]);
    for ($j = 0; $j < count($tab); $j++) {
        if (strlen($tab[$j]) > 0) {
            array_push($tab2, $tab[$j]);
        }
    }
}
sort($tab2);
for ($k = 0; $k < count($tab2); $k++) {
    echo $tab2[$k];
    if ($k < count($tab2) - 1) {
        echo "\n";
    }
}

?>