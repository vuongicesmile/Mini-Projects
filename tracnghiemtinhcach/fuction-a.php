
<?php
$data=file('ques.txt') or die("Can not read file");

array_shift($data);// xoa dong noi dung dau tirn trogng ques

//array() 12=> {}
$arrayQuestion=array();

foreach ($data as $key => $value) {
    $temp = explode("|","$value");  
    $id = $temp[0];
    $question = $temp[1];
    $arrayQuestion[$id] = array('question' => $question);
}

?>