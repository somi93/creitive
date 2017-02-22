<?php 
	function isPrime($number)
	{
		$prime = true;
		for($i = 2; $i < $number; $i++) {
			if($number%$i==0){
				$prime = false;
			}
		}
		return $prime;
	}