<?php

$fileUpload = $_FILES['file-upload'];

echo '<pre>';
print_r($fileUpload);
echo '</pre>';

if($fileUpload['name'] != null){
    $file= $fileUpload['tmp_name'];
  $des ='./file/'.$fileUpload['name']; 

     move_uploaded_file($file,$des);


}



?>