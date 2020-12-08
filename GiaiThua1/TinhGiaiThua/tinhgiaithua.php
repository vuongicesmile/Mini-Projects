<?php
//4! = 4* 3* 
//0!= 1

function factorial($num) {
    $result =1;
    if ($num>1) {
        
        // for ($i=1; $i <= $num; $i++) { 
        //     $result *=  $i;
        $result = $num * factorial($num -1);
        
       
    }
    return $result;
}

echo factorial(4);


?>