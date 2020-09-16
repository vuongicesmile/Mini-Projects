
<?php
$data=file('options.txt') or die("Can not read file");

array_shift($data);// xoa dong noi dung dau tirn trogng ques

//array() 12=> {}
$arrayOptions=array();
foreach ($data as $key => $value) {
    $temp= explode("|","$value");  
    $questionId = $temp[0];
    $optionID =$temp[1];
    $answer = $temp[2];
    $point =$temp[3];

    $arrayOptions[$questionId][$optionID]["option"]= $answer;
    $arrayOptions[$questionId][$optionID]["point"]= $point;

}

?>