<?php
print "Digite o valor do coeficiente 'a': ";
$a = trim(fgets(STDIN));

print "Digite o valor do coeficiente 'b': ";
$b = trim(fgets(STDIN));

print "Digite o valor do coeficiente 'c': ";
$c = trim(fgets(STDIN));

$delta = pow($b, 2) - 4*$a*$c;

if ($delta < 0) {
	print "\nEsta equaчуo nуo possui raэzes reais";
}

else {
	$xЙ = (-$b + sqrt($delta)) / (2 * $a);
	$xВ = (-$b - sqrt($delta)) / (2 * $a);
	print "\nRaizes da equaчуo:";
	print "\nX1 = " . $xЙ;
	print "\nX2 = " . $xВ;
}