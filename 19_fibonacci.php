<?php

$n1 = 1;
$n2 = 0;
$n3 = 0;

print "\n $n2 - $n1 ";

while ( $n3 <= 500 ) {
    $n3 = $n1 + $n2;
    
    print "- $n3 ";

    $n2 = $n1;
    $n1 = $n3;
}

print "\n \n";