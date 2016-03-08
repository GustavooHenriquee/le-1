<?php
print "Digite o valor do primeiro cateto do triâgulo: ";
	$c1 = trim(fgets(STDIN));

print "Digite o valor do segundo cateto do triângulo: ";
	$c2 = trim(fgets(STDIN));

	
	
	$h = sqrt($c1*$c1+$c2*$c2);
	$hr = pow($h, 2);
	$p = ($c1+$c2+$h);
	$a = ($h * $c1)/2;
	
	
print "O valor da hipotenusa é = $hr";
print "\nO valor do perímetro é = $p";
print "\nO valor da área é = $a";
