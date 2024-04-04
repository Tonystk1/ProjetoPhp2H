<?php
//Elyas Tomaz & Antonio Marcos 


$valor1 = 20;
$valor2 = 0;


function soma ($valor1 , $valor2){

	return ($valor1 + $valor2);
}

$resultado = soma ($valor1 , $valor2);


if($resultado >20 ){

	$resultado =$resultado + 8;

echo "Olá está soma é $resultado";

}else {

	$resultado = $resultado - 5;

echo "Olá está soma é $resultado";

}

 ?>