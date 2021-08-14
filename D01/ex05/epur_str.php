#!/usr/bin/php
<?php

$tab2 = array();
$tab = explode(" ", $argv[1]);
for ($i = 0; $i < count($tab); $i++) {
    if (strlen($tab[$i]) > 0) {
        array_push($tab2, $tab[$i]);
    }
}
$str = implode(" ", $tab2);
echo $str;
?>