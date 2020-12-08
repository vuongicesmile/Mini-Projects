<?php

$variable='this is a string';

session_start();

$_SESSION['variable']= $variable;

print_r($_SESSION);

?>