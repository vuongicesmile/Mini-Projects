<?php
    $value = 'zendvnrar';
    $options = array(
        //để thao tác với biểu thức chính qui dùng 2 dấu ##
        'options' => array('regexp' => '#^[a-zA-Z0-9]+$#')
    );
    if(!filter_var($value,FILTER_VALIDATE_REGEXP, $options))
    {
        echo $value.' khong phai la chu va so';
    }else{
        echo $value.' la chu va so';
    }


?>