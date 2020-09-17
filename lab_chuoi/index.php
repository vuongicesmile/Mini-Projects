<?php
    $url= 'http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma';

    //URL : 06_BienTham_TinhYeu_LyMaiTrang.wma
    // id : 06
    // name : bien tham
    //album

    //cach 01
    // $info = explode('/',$url);
    // //để lấy phần tử cuối cùng:
    // $result = $info[count($info)-1];
    // echo $result;

    // echo "<pre>";
    // print_r($info);
    // echo "</pre>";

    // cach 2:
    // $arrayURL = parse_url('http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma');

    // $info = explode("/",$arrayURL['path']);
    // $result = $info[count($info)-1];
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";

//cach 3
function getInfo03($url) {
    // để lấy chỉ số xuất hiện cuối cùng của chuỗi url - strripos
    $index = strripos($url,"/");
    $result = substr($url, $index +1);
    return $result;
}

$info = getInfo03($url);

$result = array();

$arrayInfo = explode("_",$info);
//id
$result["id"]= $arrayInfo[0];

//type
$arrayType = explode(".",$arrayInfo[3]);
$result["type"] = $arrayType[1];

//name,audio ,singer
$arrayInfo[3] = $arrayType[0];

function format($str) {
    $result = $str[0];
    
    for ($i = 1; $i < strlen($str) ; $i++) {
        // kiem tra ky tu hoa thuong
        if (ctype_upper($str[$i]) == true) {
            $result .= " " .$str[$i];
        }
        else {
            $result .=$str[$i];
        }//end if
    }//end for
    return $result;
}
$result["singer"] =format($arrayInfo[3]);

$result["name"] =format($arrayInfo[1]);

$result["album"] =format($arrayInfo[2]);

echo"<pre>";
print_r($result);
echo"</pre>";


?>

