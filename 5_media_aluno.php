<?php

print "\n Digite a primeira nota: ";
$nota1 = (float) fgets (STDIN);

print "\n Digite a segunda nota: ";
$nota2 = (float) fgets (STDIN);

$media = ($nota1 + $nota2) /2 ;

if ($media == 10) {
    print "\n Aprovado com Distinção. \n\n";
}

elseif ($media >= 7) {
    print "\n Aprovado. \n\n";
}

else {
    print "\n Reprovado. \n\n";
}