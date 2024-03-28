<?php 	

function calcular ($peso, $altura){
	return ($peso / ($altura * $altura));
}

$valor0 = "Antonio";
$valor1 = 79.01;
$valor2 = 1.70;



$resultado = calcular($valor1, $valor2);

if($resultado <=18.5){

	echo "Abaixo do peso.";
}
	elseif($resultado >=18.6 && $resultado <=24.9){

	echo "Peso ideal (Parabens).";
}
	elseif ($resultado >=25 && $resultado <=29.9){
	echo "Acima do peso.";
}
	elseif($resultado >=30 && $resultado <=34.9){
	echo "Obesidade Grau I";
}
	elseif($resultado >=35 && $resultado <=40){
	echo "Obesidade Grau II";
}
	elseif ($resultado >40){
	echo "Obseidade Grau III";
}



printf("Olá $valor0 seu peso é $valor1 sua altura é %.2f sendo assim o seu imc é %.2f" ,$valor2,$resultado);



 ?>