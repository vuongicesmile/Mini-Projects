<?php
$x = 'a.gmail.com';

if(filter_var($x, FILTER_VALIDATE_EMAIL)){
  echo 'là email';
}else {
  echo 'không là email';
}


?>