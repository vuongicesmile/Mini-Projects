<?php


//kiem tra ton tai :$_SESSION['age']
// neu da ton tai -> cap nhat
//neu chua ton tai -> $_SESSION['age'] = 20

session_start();

print_r($_SESSION);

if (isset($_SESSION['age'])) {
    $_SESSION['age']= 20;
}else{
    $_SESSION['age']= 30;
}

print_r($_SESSION);





?>