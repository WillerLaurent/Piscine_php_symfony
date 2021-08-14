#!/usr/bin/php
<?php

for ($i = 1; $i < $argc; $i++){
    echo $argv[$i];
    if ($i < $argc - 1) {
        echo "\n";
    }
}
?>