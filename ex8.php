<?php
print "Digite o valor do primeiro cateto do tri�gulo: ";
	$c1 = trim(fgets(STDIN));

print "Digite o valor do segundo cateto do tri�ngulo: ";
	$c2 = trim(fgets(STDIN));

	
	
	$h = sqrt($c1*$c1+$c2*$c2);
	$hr = pow($h, 2);
	$p = ($c1+$c2+$h);
	$a = ($h * $c1)/2;
	
	
print "O valor da hipotenusa � = $hr";
print "\nO valor do per�metro � = $p";
print "\nO valor da �rea � = $a";
