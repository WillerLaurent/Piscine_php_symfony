<?php

function ft_split($str)
{
    $tab2 = array();
    $tab = explode(" ", $str);
    for ($i = 0; $i < count($tab); $i++) {
        if (strlen($tab[$i]) > 0) {
            array_push($tab2, $tab[$i]);
        }
    }
    print_r($tab2);
}
?>