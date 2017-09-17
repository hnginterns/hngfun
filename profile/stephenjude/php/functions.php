<?php
# calculate float
function calDiffer($float1, $float2){
	// Check numbers to 5 digits of precision  
    // $epsilon = 0.00001;  
      
    $float1 = (float)$float1;  
    $float2 = (float)$float2; 

    $result = floatval($float1 - $float2);

    return $result;
}

function calStat($float1, $float2){
	$float1 = (float)$float1;  
    $float2 = (float)$float2;

	if($float1 > $float2){
		$result = '<i class="fa fa-arrow-up" aria-hidden="true"></i> rise';
	}else{
		$result = '<i class="fa fa-arrow-down" aria-hidden="true"></i> fall';
	}

	return $result;
}

?>