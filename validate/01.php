<?php

$varible ='nguyen van a';
function convertString($string){
    $string = str_replace(' ','_',$string);
    return $string;
}

echo filter_var($varible, FILTER_CALLBACK,array('options'=> 'convertString'));


?>