<?php

$globalArr = range(20,1000,37) ;
$count = 0;
$numExists = array (146,284,871);

//var_dump($globalArr);  
function is_Prime($num){
   
    if($num % 2 == 0) {
        return 0;
	    }
     
    for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
        if($num % $i == 0)
            return 0;
	    }
	    return $num;
}      

$b = array_map("is_Prime", $globalArr);
foreach ($b as $value){
    if ($value != 0){
        $count++;
            if ($count == 3){
                echo "<b>Third Prime number is:$value</b>";
                echo "<br/>";
                break;                
            }
    }   
}
//var_dump($b);

foreach ($numExists as $value){
    if (in_array($value, $globalArr)) {
    echo "The number $value exist in the array";
    echo "<br />";
    }else{
        echo "The number $value does not exist in the array";
        echo "<br />";
    }      
}


?>
