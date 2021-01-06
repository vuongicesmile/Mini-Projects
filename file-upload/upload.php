<?php

$fileUpload = $_FILES['file-upload'];

echo '<pre>';
print_r($fileUpload);
echo '</pre>';

if($fileUpload['name'] != null){
    $filename= $fileUpload['tmp_name'];
    $destination ='./file/'.$fileUpload['name']; 

    //  move_uploaded_file($filename,$destination);

     if(copy($filename,$destination)){
       echo 'sucess';
     };

}



?>