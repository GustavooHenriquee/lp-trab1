<?php
print "Qual o sexo do cliente? ";
$cli = trim(fgets(STDIN));

print "Quantas cervejas foram consumidas? ";
$cerv = trim(fgets(STDIN));

print "Quantos refrigerantes foram consumidos? ";
$refri = trim(fgets(STDIN));

print "Quantos espetinhos forma consumidos? ";
$espet = trim(fgets(STDIN));

$beb = trim(fgets(STDIN));

print "Valor da conta: ";
		
if ($cli == "f" || $cli == "F"){
	print "\nR$ 8,00 (Valor básico)";
}
if ($cli == "m" || $cli == "M"){
	print "\nR$ 10,00 (Valor básico)";
}


$beb = $cerv*2,50 + $refri*2 + $espet*4;

print "\n$beb (bebida e comida)";