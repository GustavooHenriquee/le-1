<?php
print "Digite um número: ";
$n1 = trim(fgets(STDIN));

print "Digite outro número: ";
$n2 = trim(fgets(STDIN));

If ($n1 < $n2){
	print "A ordem crescente é = $n1 - $n2";
}
else {
	print "A ordem crescente é = $n2 - $n1";
}