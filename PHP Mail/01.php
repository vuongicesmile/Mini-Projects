<?php
$to = "1813865@dlu.edu.vn";
$sub = "email test";
$mess="this is a test";
$header ="From:1813865@dlu.edu.vn";
if(mail($to,$sub,$mess,$header)== true){
    echo("sucess");
}else{
    echo("fail");
}


?>