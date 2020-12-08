<?php


//kiem tra ton tai :$_SESSION['age']
// neu da ton tai -> cap nhat
//neu chua ton tai -> $_SESSION['age'] = 20

session_start();

session_destroy();

print_r($_SESSION);

if (isset($_SESSION['age'])) {
    unset($_SESSION['age']);
}

print_r($_SESSION);





?>