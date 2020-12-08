<?php

session_start();
$_SESSION['course']='php programing';
$_SESSION['info']=array(
                        'teacher'=>'zendVN',
                        'time'=>100

);
echo $session = session_encode();
// print_r($_SESSION);

session_unset();

?>