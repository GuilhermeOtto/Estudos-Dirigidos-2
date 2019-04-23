<?php


print "\n Digite o 1° número: ";
$n1 = (float) fgets (STDIN);

print "\n Digite o 2° número: ";
$n2 = (float) fgets (STDIN);

print "\n Digite o 3° número: ";
$n3 = (float) fgets (STDIN);

print "\n Digite o 4° número: ";
$n4 = (float) fgets (STDIN);

print "\n Digite o 5° número: ";
$n5 = (float) fgets (STDIN);

$soma  = $n1 + $n2 + $n3 + $n4 + $n5;
$media = $soma / 5;

print "\n A soma dos 5 números é: $soma \n";
print "\n A média dos 5 números é: $media \n \n";
