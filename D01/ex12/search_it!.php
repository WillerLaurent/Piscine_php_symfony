#!/usr/bin/php
<?php

if ($argc < 3) {
    return;
}

for ($i = 2; $i < $argc; $i++) {
    $str = explode(":", $argv[$i]);
    if ($argv[1] == $str[0]) {
        echo $str[1];
        return;
    }
}
?>