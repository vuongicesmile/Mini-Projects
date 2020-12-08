<?php
    $value = 'zendvn.png';
    $options = array(
        //để thao tác với biểu thức chính qui dùng 2 dấu ##
        'options' => array('regexp' => '#\.(jpg|png|gif)$#')
    );
    if(!filter_var($value,FILTER_VALIDATE_REGEXP, $options))
    {
        echo $value.' chua thoa man';
    }else{
        echo $value.' thoa man';
    }


?>