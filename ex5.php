<?php
print "Digite um n�mero: ";
$n = trim(fgets(STDIN));

If ($n% 2 == 0) {
	print "Esse n�mero � par!";
}
Else {
	print "Esse n�mero � impar!";
}