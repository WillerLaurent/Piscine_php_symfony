<?php

function ft_is_sort($tab)
{
    $test = true;
    if (count($tab) > 1) {
        for ($i = 0; $i < count($tab) - 1; $i++) {
            if (strcmp($tab[$i], $tab[$i+1]) > 0) {
                $test = false;
            }
        }
    }
   return $test;
}
?>