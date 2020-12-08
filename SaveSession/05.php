
<?php
session_start();
$image ='hoa.jpg';

if (file_exists($image)) {
    echo 'file exists';
    $_SESSION['image']['info']= getimagesize($image);
    $_SESSION['image']['data']= file_get_contents($image);
}else{
    echo 'file not exists';
}

print_r($_SESSION);
?>