<?php

$n = 9;

//se n�mero for negativo
if($n < 0) $n = $n * (-1);

echo "Soma dos fatoriais de  " . $n . " �: ". fator($n);

function fator($n)
{
   $soma = 0;
   echo("Fatorias de ".$n." : "."\n\n");
   for($i = 1; $i <= $n; $i++)
   {
     if($n % $i == 0)
     {
     	$soma+= $i;
     }
   }
   return $soma;
}
