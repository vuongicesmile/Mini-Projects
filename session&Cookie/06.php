<?php

session_start();
if (isset($_SESSION['name'])) { 
    echo 'ton tai';

} else{
    echo 'chua ton tai';
}





?>