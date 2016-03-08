<?php
print "Digite um número: ";
$n = trim(fgets(STDIN));

If ($n% 2 == 0) {
	print "Esse número é par!";
}
Else {
	print "Esse número é impar!";
}