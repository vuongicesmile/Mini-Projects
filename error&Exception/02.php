<?php

if (file_exists('data.txt')) {
    $data = file_get_contents('data.txt');
    foreach ($data as $key => $value) {
        echo $value['name'].'<br/>';
    }
} else{
    die('file not found');
}



echo '<br/> here';
?>