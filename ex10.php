<?php
print "Digite o valor do coeficiente 'a': ";
$a = trim(fgets(STDIN));

print "Digite o valor do coeficiente 'b': ";
$b = trim(fgets(STDIN));

print "Digite o valor do coeficiente 'c': ";
$c = trim(fgets(STDIN));

$delta = pow($b, 2) - 4*$a*$c;

if ($delta < 0) {
	print "\nEsta equa��o n�o possui ra�zes reais";
}

else {
	$x� = (-$b + sqrt($delta)) / (2 * $a);
	$x� = (-$b - sqrt($delta)) / (2 * $a);
	print "\nRaizes da equa��o:";
	print "\nX1 = " . $x�;
	print "\nX2 = " . $x�;
}