<meta charset="UTF-8">
<?php
//100 mot tram
//101 mot tram linh mot

$dictionaryNumbers = array(
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
$dictionaryUnits = array(
                    0 => "tỷ",
                    1 => "triệu",
                    2 => "nghìn",
                    3 => "đồng"

                );    


    function readNumber3Digit($number, $dictionaryNumber,$readFull = true) {
        
                //01 - lay chu so hang tram, chuc , don vi
                $number= strval($number);
                $number = str_pad($number,3,0,STR_PAD_LEFT);
               $digit_0 = substr($number,2,1);
               $digit_00 = substr($number,1,1);
               $digit_000 = substr($number,0,1);
               //hang tran
               $str_000 = $dictionaryNumber[$digit_000]." trăm ";
               // hang chuc
               $str_00 = $dictionaryNumber[$digit_00]." mươi ";
               if ($digit_00 == 0) {$str_00 = "linh ";}
               if ($digit_00 == 1) {$str_00 = "mười ";}
    
               // don vi
    
               $str_0 = $dictionaryNumber[$digit_0];
            if ($digit_00 > 1 && $digit_0 == 1) {$str_0 = " mốt ";}
            if ($digit_00 > 0 && $digit_0 == 5) {$str_0 = " lăm ";}
            if ($digit_00 == 0 && $digit_0 == 0) {
                $str_0 = "";
                $str_00="";
            }

            if ($readFull == false) {
                if ($digit_000==0) {
                    $str_000 = "";
                }
                if ($digit_00==0) {
                    $str_00 = "";
                }
            }

               $result = $str_000.$str_00.$str_0;
        
        return $result;
        }

        $number = 1620;
    //1620 : 000 ty 000 trieu 0001 nghin 620 dong
      //dùng hàm strval để thêm các số 0 vào trước hàm  
    $number = strval($number);
    $number = str_pad($number,12,0,STR_PAD_LEFT);
    $arrNumber = str_split($number,3); 

    foreach ($arrNumber as $key => $value) {
        $result[$key]= readNumber3Digit($value,$dictionaryNumbers,true).$dictionaryUnits[$key];
    }
print_r($result);

    echo "Input :" .$number."<br/>";
    echo "Output :" .$result."<br/>";
?>
    
    