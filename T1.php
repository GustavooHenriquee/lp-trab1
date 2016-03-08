<?php
print "Qual o sexo do cliente(f/m)? ";
$sexo = trim(fgets(STDIN));

if ($sexo == "f" || $sexo == "F"){
	$sexo = 8;
}
else{
	$sexo = 10;
}
	

print "Quantas cervejas foram consumidas? ";
$cerv = trim(fgets(STDIN));


print "Quantos refrigerantes foram consumidos? ";
$refri = trim(fgets(STDIN));

print "Quantos espetinhos foram consumidos? ";
$espet = trim(fgets(STDIN));

$conta1 = $cerv*2.50;
$conta2 = $refri*2;
$conta3 = $espet*4;

$resultado = ($conta1+$conta2+$conta3);

print "Valor da conta: ";

print "\n$sexo		(valor básico)";
print "\n$resultado		(bebida e comida)";

if($resultado <= 15 ){
	$cantor = 3;
	print "\n$cantor		(cantores)";
}
else{
	$cantor = 0;
}

$subtotal = $sexo+$resultado+$cantor;

print "\n$subtotal		(subtotal sem 10%)";

$total = $subtotal*.10+$subtotal;
print "\n------------------------";
print "\n$total		(Total)";
	