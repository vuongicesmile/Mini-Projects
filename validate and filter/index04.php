<?php
    
    $array = array(
        //để thao tác với biểu thức chính qui dùng 2 dấu ##
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
            'options' => array('min-range' => )
    ),
        );


    $result = filter_var_array($data,$filters)


?>