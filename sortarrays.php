<?php 
  function sort_arrays($array1, $array2){
  	$newArray = array();
  	$result = array_merge($array1, $array2);
  	$result = array_unique($result);
  	asort($result);

	foreach ($result as $key => $value) {
		array_push($newArray, $value);
	}

  	return $result;
  }