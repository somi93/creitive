<?php
	function factorial($number)
	{
		$output = 1;
		for($i = $number; $i > 0; $i--) {
			$output = $output*$i;
		}
		return $output;
	}
	echo factorial(5);