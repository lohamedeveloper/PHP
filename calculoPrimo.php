<?php


$n = 2;

if(num_primo($n) > -1)
{
	echo ("Número ".$n." "."Primo");
}
else{

	if( num_primo($n == -1) )
	{
		echo ("Númeo ".$n." não Primo");
	}
	else echo ("Número ".$n. " não definido");
}

//returna 1 se número primo, -1 não primo, -2 não definido
function num_primo(int $n)
{

	if( validarNumero($n) == 1)
	{
		for($i = 2; $i < $n-1; $i++)
		{
			if($n % $i == 0)
			{
				return -1;
			}
		}
		return 1;
	}
	return -2;
}

/* válidar o número*/
function validarNumero( int $n )
{
	if($n < 0) return -1;
	return 1;
}