<?php
print "Digite o primeiro n�mero: ";
$n1 = trim(fgets(STDIN));

print "Digite o segundo n�mero: ";
$n2 = trim(fgets(STDIN));

print "Digite o terceiro n�mero: ";
$n3 = trim(fgets(STDIN));

print "Digite o quarto n�mero: ";
$n4 = trim(fgets(STDIN));

$som = ($n1+$n2+$n3+$n4) / 4 ;

print "A m�dia aritm�tica � = " . $som;