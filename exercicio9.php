<?php 	

function calcular ($peso, $altura){
	return ($peso / ($altura * $altura));
}

$valor0 = "Antonio";
$valor1 = 79.01;
$valor2 = 1.70;



$resultado = calcular($valor1, $valor2);

printf("Olá $valor0 seu peso é $valor1 sua altura é %.2f sendo assim o seu imc é %.2f" ,$valor2,$resultado);



 ?>