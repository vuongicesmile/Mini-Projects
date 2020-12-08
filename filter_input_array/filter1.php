<?php

$filters = array(
    'name' => array(
        'filter' => FILTER_CALLBACK,
        'option' =>'ucwords'
    ),



);

$result = filter_input_array(INPUT_POST,$filters);

print_r($result)

?>