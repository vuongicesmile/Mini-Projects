<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<?php
$content = file_get_contents('https://dantri.com.vn/the-thao.htm');


$pattern ='#lazy-src="(.*)"#imsU';
preg_match_all($pattern,$content,$matches);
echo "<pre>";
print_r($matches);
echo "</pre>";



?>