<?php

print "\n         QUADRADO    \n\n   ";

for ($i = 0; $i < 8; $i++ ) {
    
    for ($j = 0; $j < 10; $j++) {
        print " *";
    }

    print "\n   ";
}

print "\n";


//--------------------------------------//

print "\n   PIRÂMIDE LADO ESQUERDO  \n\n   ";

for ($i = 1; $i <= 10; $i++ ) {

    for ($j = 1; $j <= $i; $j++) {
        print " *";
    }

    print  "\n   ";    
}


//--------------------------------------//

print "\n   PIRÂMIDE LADO DIREITO  \n\n  ";

for ($i = 1; $i <= 10; $i++ ) {
        
        for($k = 10; $k > $i ; $k--){

            print "  ";     
        }
        
        for ($j = 1; $j <= $i; $j++) {

            print " *";
        }

    print "\n  ";    
}

//-------------------------------------------//

/* Já que houve mais tempo para fazer a lista resolvi acrescentar um outro tipo de pirâmide ao exercício,
 espero que não tenha problema :)      */ 

//--------------------------------------//

print "\n    PIRÂMIDE ISÓCELES  \n\n  ";

for ($i = 1; $i <= 10; $i++ ) {
        
        for($k = 10; $k >= $i ; $k--){

            print " ";     
        }
        
        for ($j = 1; $j <= $i; $j++) {

            print " *";
        }

    print "\n  ";    
}

PRINT "\n";





