<?php

print "\n Digite a base: ";
$base = (float) fgets (STDIN);

print "\n Digite o expoente: ";
$expoente = (float) fgets (STDIN);

$base1 = $base;
$contador = 1;

if ($expoente == 0){
    print "\n $base ^ $expoente = 1 \n \n";
}

else {

    while ($contador < $expoente) {
        $base1 = $base1 * $base;
    
        $contador = $contador + 1;
    }

    print "\n  $base ^ $expoente = $base1 \n \n";
}