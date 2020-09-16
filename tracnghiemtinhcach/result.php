<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <title>Trắc nghiệm tính cách</title>
            <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
<?php
// đọc file question

$data = file("ques.txt") or die("can not open file");

$point =0;

array_shift($data);

foreach ($data as $key => $value) {
    $temp = explode("|","$value");
    $id= $temp[0];
    $point =$point + $_POST[$id];

//     echo "<pre>";
// print_r($_POST[$id]);
// echo "</pre>";
}


// đọc file result
$data = file("result.txt") or die("can not open file");
array_shift($data);

foreach ($data as $key => $value) {
    $temp=explode("|","$value");
    $min = $temp[0];
    $max = $temp[1];
    $content = $temp[2];
    if($point >- $min && $point <= $max) {
        $result = $content;
        break;
    }

}


    // echo"<pre>";
    //     print_r($point);
    // echo"</pre>";
?>
            <div class="content">
                        <h1>Kết quả trắc nghiệm tính cách</h1>
                        <p>
                        <b>Tổng số điểm của bạn là: </b>
                        <?php echo $point ?> <p style='margin-top:10px;text-align: justify'>
                        <b>Kết quả trắc nghiệm của bạn: </b><?php echo $result;?></p>
            </div>
           
</body>
</html>
