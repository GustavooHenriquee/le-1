<?php
print "Digite a 1� medida do Triangulo: ";
$a = trim(fgets(STDIN));

print "Digite a 2� medida do Triangulo: ";
$b = trim(fgets(STDIN));

print "Digite a 3� medida do Triangulo: ";
$c = trim(fgets(STDIN));


if ($a<$b+$c && $b<$a+$c && $c<$a+$b) {
	print "Forma um Triangulo!";
}

else {
	print "N�o forma um Triangulo";
}
