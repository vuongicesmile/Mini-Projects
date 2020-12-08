<?php

function sum($num) {
    $result = 0;
    if ($num>= 1) {
        $result= sum($num -1)+ $num;
    }
    return $result;

}
echo sum(4);


?>