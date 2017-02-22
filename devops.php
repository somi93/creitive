<?php 
	for($i = 1; $i <= 100; $i++) {
		if($i%3==0) {
			if($i%5==0) {
				echo "DevOps<br/>";
			} else {
				echo "Dev<br/>";
			}
		} elseif ($i%5==0) {
			echo "Ops<br/>";
		} else {
			echo $i."<br/>";
		}
	}
