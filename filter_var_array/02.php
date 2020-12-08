<?php

$array = array(
        'name' => 'nguyen van a',
        'age' => 123,
        'email' => 'nva@gmail.com'

);
$filters = array(
        'name' => array(
            'filter' => FILTER_CALLBACK,
            'options' => 'ucwords'
        ),
        'age' => array(
            'filter' => FILTER_VALIDATE_INT,
            'options' => array('min_range'=> 1,'max_range'=>1000)
        ),
        'email' => array(
            'filter' => FILTER_VALIDATE_EMAIL
            
        ),
);

$result = filter_var_array($array,$filters);

print_r($result);

?>