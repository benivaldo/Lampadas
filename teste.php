<?php

class Lampadas
{
	public function percorrerCorredor($quantidadeDeLampadas)
	{
		$lampadasDoCorredor = array();
		
		for ($i = 1; $i <= $quantidadeDeLampadas; $i++) {
			$raiz = sqrt($i);
			$piso = floor($raiz);
			if($raiz === $piso){            
				array_push($lampadasDoCorredor, 'On');    
			} else {
				array_push($lampadasDoCorredor, 'Off');    
			}          
		}
		
		return $lampadasDoCorredor;
	}
}


$lampadas = new Lampadas;

$dados = $lampadas->percorrerCorredor(10);

$resultado = '';

foreach ($dados as $val) {
    $resultado .= $val.",";
}

echo "(".substr($resultado,0, -1).")";


