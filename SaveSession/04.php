
<?php
session_start();

$_SESSION['file'] ='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>this is a file</h1>
</body>
</html>
<?php

function checkNumber($number) {
    return($number % 2 ==0) ? "so chan" : "so le";
}
?>';
print_r($_SESSION);

eval('?>'.$_SESSION['file']);
echo checkNumber(4);
?>