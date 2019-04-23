<?php

print "\n Digite o preço do primeiro produto: R$";
$p1 = (float) fgets (STDIN);

print "\n Digite o preço do segundo produto: R$";
$p2 = (float) fgets (STDIN);

print "\n Digite o preço do terceiro produto: R$";
$p3 = (float) fgets (STDIN);

if ($p1 <=  $p2 and $p1 <= $p3) {
    print "\n Deve-se comprar o produto cujo o valor é: R$$p1 pois é o mais barato.\n";
}

elseif ($p2 <=  $p1 and $p2 <= $p3) {
    print "\n Deve-se comprar o produto cujo o valor é: R$$p2 pois é o mais barato.\n";
}

elseif ($p3 <=  $p1 and $p3 <= $p2) {
    print "\n Deve-se comprar o produto cujo o valor é: R$$p3 pois é o mais barato.\n";
}
