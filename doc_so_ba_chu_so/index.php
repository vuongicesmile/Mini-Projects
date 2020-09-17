<meta charset="UTF-8">
<?php
//100 mot tram
//101 mot tram linh mot

$arrNumber = array(
                      0 => "không",
                      1 => "một",
                      2 => "hai",
                      3 => "ba",
                      4 => "bốn",
                      5 => "năm",
                      6 => "sáu",
                      7 => "bảy",
                      8 => "tám",
                      9 => "chín"
                    );
    $number = 821;

    echo "Input :" .$number."<br/>";
    if(is_int($number)) {
        if ($number >= 100 && $number <= 999) {
            //01 - lay chu so hang tram, chuc , don vi
           $digit_0 = substr($number,2,1);
           $digit_00 = substr($number,1,1);
           $digit_000 = substr($number,0,1);
           
           $str_000 = $arrNumber[$digit_000]." trăm ";
           // hang chuc
           $str_00 = $arrNumber[$digit_00]." mươi ";
           if ($digit_00 == 0) {$str_00 = "linh";}
           if ($digit_00 == 1) {$str_00 = "linh";}

           // don vi

           $str_0 = $arrNumber[$digit_0];
        if ($digit_00 > 1 && $digit_0 == 1) {$str_0 = " mốt ";}
        if ($digit_00 > 0 && $digit_0 == 5) {$str_0 = " lăm ";}
        if ($digit_00 == 0 && $digit_0 == 0) {$str_0 = ""; $str_00="";}
           $result = $str_000.$str_00.$str_0;

        }else {
            $result = "Giá trị nhập vào phải có 3 chữ số";
        }// end child if
    
    }else {
        $result = "Giá trị nhập vào phải là số";
        
    };//end if
    echo $result;
    
    
?>