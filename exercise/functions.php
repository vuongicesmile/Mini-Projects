<?php
//kiem tra du lieu khac rong
function checkEmpty($value) {
    //1 gia rong khi co 2 case : goi ham isset dua gia tri value ; sau khi cat value = 0
    $flag = false;
    if (!isset($value) || trim($value)=="" ) {
        $flag = true;
    }
    return $flag;
}
//kiem tra chieu dai du lieu
//fucntion can truyen vao bao nhieu tham so?

function checkLength($value, $min,$max){
    $flag = false;
    $length = strlen($value);
    if ($length < $min || $length > $max) {
        $flag = true;
    }
    return $flag;}

    // tao ra ten file 
    function ramdomString($length = 5)
    {
        $arrCharacter =array_merge(range('A','Z'),range('a','z'),range('0','9'));
        //chuyen tu mang thanh 1 chuoi
         $arrCharacter=implode($arrCharacter,'');
         $arrCharacter=str_shuffle($arrCharacter);

         $result = substr($arrCharacter,0,$length);
         return $result;

    }
?>