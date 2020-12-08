<?php


$value = '084-08-38.2354545';
$options = array(
              'options' => array('regexp' => '#^084-[0-9]{2}-[0-9]{2}\.[0-9]{7}$#')
            );



if(filter_var($value,FILTER_VALIDATE_REGEXP,$options)){
    echo $value.'thoa man';
} else{

    echo $value.'chua thoa man';
}

?>