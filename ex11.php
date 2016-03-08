<?php
print "Digite a 1º medida do Triangulo: ";
$a = trim(fgets(STDIN));

print "Digite a 2º medida do Triangulo: ";
$b = trim(fgets(STDIN));

print "Digite a 3º medida do Triangulo: ";
$c = trim(fgets(STDIN));


if ($a<$b+$c && $b<$a+$c && $c<$a+$b) {
	print "Forma um Triangulo!";
}

else {
	print "Não forma um Triangulo";
}
