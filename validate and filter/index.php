<?php
    $value = '084-08-38.234561';
    $options = array(
        //để thao tác với biểu thức chính qui dùng 2 dấu ##
        'options' => array('regexp' => '#^084-[0-9]{2}-[0-9]{2}\.[0-9]{6}$#')
    );
    if(!filter_var($value,FILTER_VALIDATE_REGEXP, $options))
    {
        echo $value.' chua thoa man';
    }else{
        echo $value.' thoa man';
    }


?>