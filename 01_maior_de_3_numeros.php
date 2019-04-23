<?php

print "\n Digite um número: ";
$numero_1 = (float) fgets (STDIN);

print "\n Digite outro número: ";
$numero_2 = (float) fgets (STDIN);

if ($numero_1 > $numero_2) {
    print "\n O maior número digitado é: $numero_1 \n\n";
}

elseif ($numero_2 > $numero_1) {
    print "\n O maior número digitado é: $numero_2 \n\n";
}

else {
    echo "\n Os números digitados são iguais \n\n";
}
