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

$onlyPrimes = array_filter($globalArr,"is_Prime");

foreach ($onlyPrimes as $value){
    $count++;
    if ($count == 3){
        echo "<b>The Third Prime number is:$value</b>";
        echo "<br/>";
        break;                
    }
}   

//var_dump($onlyPrimes);

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
