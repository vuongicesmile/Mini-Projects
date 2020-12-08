<?php

$array = array(
    array('course' => 'Joobla','time' =>80),
    array('course' => 'Zend','time' =>110),
    array('course' => 'Jquery','time' =>120),
);

session_start();

$_SESSION['array']= $array;

print_r($_SESSION);

?>