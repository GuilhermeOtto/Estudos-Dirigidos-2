<?php

print "\n Digite um número: ";
$valor = (float) fgets (STDIN);


if ($valor > 0) {
    print "\n O $valor é um número positivo \n\n";
}

elseif ($valor < 0) {
    print "\n O $valor é um número negativo \n\n";
}

else {
    print "\n O $valor é um número neutro \n\n";
}
