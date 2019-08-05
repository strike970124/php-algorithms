<?php

$matrix = array(
    array(5,9,10,6,1),
    array(6,8,5,4,12),
    array(7,3,8,2,7)
    );
$result = array();
$count = 0;

$highest_even = 0;
$position_highest_even = -1;
$highest_odd =0;
$position_highest_odd = -1;

for($x=0;$x<count($matrix);$x++){
    $row = $matrix[$x];
    for($y=0;$y<count($row);$y++){
        $value = $row[$y];
       if(count($result) != 0){
			if ($value % 2 == 0){
				if($position_highest_even == -1){
					array_unshift($result,$value);
					$highest_even  = $value;
					$position_highest_even = 0;
					$position_highest_odd += 1;
				}else{
					if(in_array($value,$result)){
						array_splice($result,$position_highest_even + 1 ,0,0);
						$position_highest_odd += 1;
					}else{
						if($position_highest_even == 0){
							if($value > $result[$position_highest_even]){
								array_splice($result,$position_highest_even,0,$value);
							}else{
								array_unshift($result,$value);
							}
							$position_highest_even += 1;
							$position_highest_odd += 1;
						}else{
							$insert = false;
							for($i=$position_highest_even;$i >= 0;$i--){
								if ($value > $result[$i]){
									array_splice($result,$i+1,0,$value);
									$position_highest_even += 1;
									$position_highest_odd += 1;
									$insert = true;
									break;
								}
							}
							if($insert == false){
								array_unshift($result,$value);
								$position_highest_even += 1;
								$position_highest_odd += 1;
							}
							
						}

					}
				}
			}else{
				if($position_highest_odd == -1){
					array_push($result,$value);
					$highest_odd  = $value;
					$position_highest_odd = 0;					
				}else{
					if(in_array($value,$result)){
						array_splice($result,$position_highest_odd ,0,0);
						$position_highest_odd += 1;
					}else{
						
						if($position_highest_odd == 0){
							if($value < $result[$position_highest_odd]){
								array_splice($result,$position_highest_odd + 1,0,$value);
							}else{
								array_splice($result,$position_highest_odd , 0, $value);
							}
						}else{
							$insert = false;
							for($i = $position_highest_odd; $i < count($result) ;$i++){
								if ($value > $result[$i]){
									array_splice($result,$i,0,$value);
									$insert = true;
									break;
								}
							}
							if($insert == false){
								array_push($result,$value);
							}
						}
					}
				}
			}       
       }else{
           array_push($result,$value);
           if ($value % 2 == 0){
           	$highest_even = $value;
           	$position_highest_even = 0;
           }else{
           	$highest_odd = $value;
           	$position_highest_odd = 0;
           }           
       }
    }
}

print_r($result);

?>