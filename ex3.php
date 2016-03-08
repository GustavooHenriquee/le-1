<?php
print "Digite o primeiro número: ";
$n1 = trim(fgets(STDIN));

print "Digite o segundo número: ";
$n2 = trim(fgets(STDIN));

print "Digite o terceiro número: ";
$n3 = trim(fgets(STDIN));

print "Digite o quarto número: ";
$n4 = trim(fgets(STDIN));

$som = ($n1+$n2+$n3+$n4) / 4 ;

print "A média aritmética é = " . $som;