<?php
    $str ="     nguyen vAn An";
    strlen($str). "<br>";  //13 ki tu Nguyen Van An

    //dua tat ca cac ki tu ve dang chu thuong
    $str = strtolower($str);
    //khoang trang du thua o ben trai va ben phai
    $str = trim($str);
     //loai bo khoang trang du thua giua cac tu
    $type ="danh-tu";
    $array = explode(" ",$str);
    //kiem tra phan tu co phai la rong hay khong? neu la rong remove phan tu do ra khoi mang
    foreach ($array as $key => $value) {
        if (trim($value) == null) {
        unset($array[$key]);
        continue;
        }//enf if

        if($type=="danh-tu") {
            $array[$key] = ucfirst($value);
        }//end if


    }//end foreach

    // print_r($array);
    echo $str = implode(" ",$array);
    // echo strlen($str);

?>