<?php

$contador = 0;
$impar = 0;
$par = 0;

while ( $contador < 10 ) {

    $contador = $contador + 1;
    
    print "\n Digite o um número: ";
    $n1 = (int) fgets(STDIN);

    if ( ( $n1 % 2 ) == 0 and $n1 != 0 ) {
    $par = $par + 1;
    }

    elseif ( ( $n1 % 2 ) != 0 and $n1 != 0 ) {
    $impar = $impar + 1;
    }
}

print "\n Quantidade de números pares: $par ";
print "\n Quantidade de números impares: $impar \n \n";
