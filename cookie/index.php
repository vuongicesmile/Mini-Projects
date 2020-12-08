<?php

if (isset($_COOKIE['lastlogin'])) {
    $time = $_COOKIE['lastlogin'];
    echo 'Last login:'.date('d/m/Y H:i:s',$time);
    setcookie('lastlogin',time());
}
else{
    setcookie('lastlogin',time(),time()+3600);
}

?>