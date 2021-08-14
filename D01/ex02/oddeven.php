#!/usr/bin/php
<?php
echo "Entrez un nombre : ";
$handle = fopen("php://stdin", 'r');
$line = fgets($handle);
$test = true;
for ($i = 0; $i < strlen($line) - 2; $i++) {
    $caractere = substr($line, $i, 1);
    echo "caractere : ".$caractere."\n";
    if (ord($caractere) < ord(0)) {
        $test = false;
        break;
    } elseif(ord($caractere) > ord(9)) {
        $test = false;
        break;
    }
}
if ($test == false) {
    echo  "'$line' n'est pas un nombre";
} else {
    $num = (int)$line;
    if ($num % 2 == 0) {
        echo "'$num' est un nombre pair";
    } else {
        echo "'$num' est un nombre impair";
    }
}
?>