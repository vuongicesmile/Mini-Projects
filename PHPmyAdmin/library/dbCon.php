
<?php

$connection = mysqli_connect('localhost','root','','khoaphamtraining');

if($connection)
{
    echo 'we are connected';
}else
{
    die("database connection fail");
}



?>