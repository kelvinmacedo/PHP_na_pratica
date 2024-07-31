<?php
// 1 - Escreva um programa em PHP que exiba seu nome na tela.

$numero = 10;
echo $numero;

// 2 - Crie um programa em PHP que calcule a média de três notas e exiba o resultado.

$nota = [ 9, 9, 9, 9, 9, 9];
$soma = array_sum($nota);
$divisor = count($nota);
$media = $soma / $divisor;
echo "Sua media é: $media";

// 3 - Elabore um programa em PHP que receba um valor em metros e converta para centímetros.

$medidaEmMetros = 1.75;
$medidaEmCentimetros = $medidaEmMetros * 100;
echo "O valor de $medidaEmMetros metros, convertido em centimetros é $medidaEmCentimetros.";

// 4 - Desenvolva um programa em PHP que verifique se um ano é bissexto ou não:

$ano = 2001;
if($ano % 4 == 0 ){
  if($ano % 100 !== 0 || $ano % 400 == 0){
    echo "$ano é bissexto.";
  }else{
    echo "$ano não é bissexto.";
  }
}else{
  echo "$ano não é bissexto.";
}

//-----------usando ternario----------------

$ano = 2000;
$tipoDoAno = ($ano % 4 == 0 && $ano % 100 !== 0) || $ano % 400 == 0 ? "$ano é bissexto." : "$ano não é Bissexto.";
echo $tipoDoAno;

// 5 - Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit.
function converterCelsiusToFahrenheit($temperaturaCelsius){
  return ($temperaturaCelsius * 9 / 5) + 32;
}

$temperaturaCelsius = 25;
$resultado = converterCelsiusToFahrenheit($temperaturaCelsius);
echo "A temperatura em Fahrenheit é $resultado";