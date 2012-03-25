<style>
.red {
    color: red;
}
.blue{
    color: aqua;    
}
</style>

<?php

function numProcess($parm){
    if (is_numeric($parm)){ 
        
        if (!($parm >= 0 && $parm <= 19999) )  {
            echo "<p class= \"red\" >The parameter is not within the range [0,19999]</p>";                
        }
            
        if(is_prime($parm)){
            echo "The number ".$parm." is prime !";             
        } 
        else {
            echo "<p class= \"blue\" >The number $parm is NOT prime!</p>";           
        }    
                
    }else{
     echo "<p class= \"red\" >The parameter is not a number </p>"; 
         
    }       
}
    
    
    
function is_Prime($num){
   
    if($num == 1)
        return false;
	 
    if($num == 2)
        return true;
    
    if($num % 2 == 0) {
        return false;
	    }
     
    for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
        if($num % $i == 0)
            return false;
	    }
	    return true;
}       
        
        
    
    
?>