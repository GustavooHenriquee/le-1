<?php
print "Valor de Comprimento =  ";
$a = trim(fgets(STDIN));

print "Valor de Largura = ";
$b = trim(fgets(STDIN));

$c = $a*$b;
$d = $a+$b+$a+$b;

print "A área desse Retângulo é = " . $c;

print "\nO comprimento desse Reângulo é = " . $d;