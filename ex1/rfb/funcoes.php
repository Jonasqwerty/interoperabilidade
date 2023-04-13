<?php

	function valida ( $entrada ) {
		if (strlen($entrada) != 11) {
			return false;
		}
		if ( !is_numeric ($entrada) ) {
			return false;
		}
		$soma = 0;
		for($i=0;i<9;$i++){
			$soma += $entrada[$i] * (10-$i);
		}
		$mod = $soma %11;
		$dv = 11 - $mod;
		if($dv > 9){
			$dv = 0;
		}
		if($entrada[9] != $dv){
			return false;
		}
		$soma = 0;
		for($i=0;i<10;$i++){
			$soma += $entrada[$i] * (11-$i);
		}
		$mod = $soma %11;
		$dv = 11 - $mod;
		if($dv > 9){
			$dv = 0;
		}
		if($entrada[10] != $dv){
			return false;
		}

		return true;
	}

