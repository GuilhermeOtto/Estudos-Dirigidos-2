<?php

print "\n Digite a letra [F] ou [M]: ";
$sexo = (string) fgetc (STDIN);

if ($sexo == 'M') {
    print "\n $sexo corresponde ao sexo Masculino. \n\n";
}

elseif ($sexo == 'F') {
    print "\n $sexo corresponde ao sexo Feminino. \n\n";
}

else {
    print " \n Sexo Inválido \n\n";
}