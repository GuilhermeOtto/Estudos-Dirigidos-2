<?php

print "\n Digite o 1° número: ";
$numero1 = (float) fgets (STDIN);

print "\n Digite o 2° número: ";
$numero2 = (float) fgets (STDIN);

print "\n Digite o 3° número: ";
$numero3 = (float) fgets (STDIN);

print "\n Digite o 4° número: ";
$numero4 = (float) fgets (STDIN);

print "\n Digite o 5° número: ";
$numero5 = (float) fgets (STDIN);

if ($numero1 >= $numero2 and $numero1 >= $numero3 and $numero1 >= $numero4 and $numero1 >= $numero5) {
    print "\n O maior número digitado é: $numero1 \n\n";
}

elseif ($numero2 >= $numero1 and $numero2 >= $numero3 and $numero2 >= $numero4 and $numero2 >= $numero5) {
    print "\n O maior número digitado é: $numero2 \n\n";
}

elseif ($numero3 >= $numero1 and $numero3 >= $numero2 and $numero3 >= $numero4 and $numero3 >= $numero5) {
    print "\n O maior número digitado é: $numero3 \n\n";
}

elseif ($numero4 >= $numero1 and $numero4 >= $numero3 and $numero4 >= $numero2 and $numero4 >= $numero5) {
    print "\n O maior número digitado é: $numero4 \n\n";
}

elseif ($numero5 >= $numero1 and $numero5 >= $numero3 and $numero5 >= $numero4 and $numero5 >= $numero2) {
    print "\n O maior número digitado é: $numero5 \n\n";
}

