<?php
print "Digite um n�mero: ";
$n1 = trim(fgets(STDIN));

print "Digite outro n�mero: ";
$n2 = trim(fgets(STDIN));

If ($n1 < $n2){
	print "A ordem crescente � = $n1 - $n2";
}
else {
	print "A ordem crescente � = $n2 - $n1";
}