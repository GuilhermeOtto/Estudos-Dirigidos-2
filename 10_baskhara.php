<?php

print "\n Insira o valor de A: ";
    $a = (float) fgets(STDIN);

    if ($a == 0) {
        print "\n Não é uma equação de 2° Grau, pois A é igual a 0. \n \n";
    }

    else {
        print "\n Insira o valor de B: ";
            $b = (float) fgets(STDIN);

        print "\n Insira o valor de C: ";
             $c = (float) fgets(STDIN);

            $delta = (float) pow($b,2) - 4 * $a * $c;  // pow() e ** --> exponênciação -> pow(base, expoente); 

        if ($delta < 0) {
            print "\n A equação não possui raízes, pois Delta é negativo. ( Delta = $delta ). \n \n";
        }
            
                $x1 = (-$b + sqrt($delta)) / (2*$a);       //sqrt() serve para raiz quadrada 
                $x2 = (-$b - sqrt($delta)) / (2*$a);
                
       if ($delta == 0) {
            print "\n Por Delta = 0, há apenas uma raíz real. Sendo ela, igual a: x = $x1 \n \n";
        }

        if ($delta > 0) {
            print "\n Por Delta ser positivo, há duas raízes reais. Sendo elas: \n \n";
            print " Delta = $delta \n";
            print " X1 = $x1 \n";
            print " X2 = $x2 \n \n";
        }     
    }