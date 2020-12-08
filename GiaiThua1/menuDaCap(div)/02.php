<?php
$menu = array();
$menu[] = array('id'=> 1,'name' => 'Home','parent'=> 0);
$menu[] = array('id'=> 2,'name' => 'About','parent'=> 0);
$menu[] = array('id'=> 3,'name' => 'News','parent'=> 0);
$menu[] = array('id'=> 4,'name' => 'Products','parent'=> 0);
$menu[] = array('id'=> 5,'name' => 'Contacts','parent'=> 0);
$menu[] = array('id'=> 6,'name' => 'Tin trong nuoc','parent'=> 3);
$menu[] = array('id'=> 7,'name' => 'Tin nuoc ngoai','parent'=> 3);
$menu[] = array('id'=> 8,'name' => 'CNTT','parent'=> 6);
$menu[] = array('id'=> 9,'name' => 'Lap trinh','parent'=> 6);
$menu[] = array('id'=> 10,'name' => 'IT','parent'=> 7);
$menu[] = array('id'=> 11,'name' => 'Programing','parent'=> 7);
$menu[] = array('id'=> 12,'name' => 'Software','parent'=> 4);
$menu[] = array('id'=> 13,'name' => 'Mobile','parent'=> 4);
$menu[] = array('id'=> 14,'name' => 'AntiVirus','parent'=> 12);
$menu[] = array('id'=> 15,'name' => 'Nokia','parent'=> 13);
$menu[] = array('id'=> 16,'name' => 'Samsung','parent'=> 13);
$menu[] = array('id'=> 17,'name' => 'S1','parent'=> 16);
$menu[] = array('id'=> 18,'name' => 'S1.1','parent'=> 17);


$menu1[] = array('id'=> 1,'name' => 'Home','parent'=> 0,'level'=>1);
$menu1[] = array('id'=> 2,'name' => 'About','parent'=> 0,'level'=>1);
$menu1[] = array('id'=> 3,'name' => 'News','parent'=> 0,'level'=>1);
$menu1[] = array('id'=> 6,'name' => 'Tin trong nuoc','parent'=> 3 ,'level'=>2);
$menu1[] = array('id'=> 8,'name' => 'CNTT','parent'=> 6,'level'=>3);
$menu1[] = array('id'=> 9,'name' => 'Lap trinh','parent'=> 6,'level'=>3);

$menu1[] = array('id'=> 7,'name' => 'Tin nuoc ngoai','parent'=> 3,'level'=>2);
$menu1[] = array('id'=> 10,'name' => 'IT','parent'=> 7,'level'=>3);
$menu1[] = array('id'=> 11,'name' => 'Programing','parent'=> 7,'level'=>3);

$menu1[] = array('id'=> 4,'name' => 'Products','parent'=> 0,'level'=>1);
$menu1[] = array('id'=> 12,'name' => 'Software','parent'=> 4,'level'=>2);
$menu1[] = array('id'=> 14,'name' => 'AntiVirus','parent'=> 12,'level'=>3);

$menu1[] = array('id'=> 13,'name' => 'Mobile','parent'=> 4,'level'=>2);

$menu1[] = array('id'=> 15,'name' => 'Nokia','parent'=> 13,'level'=>3);
$menu1[] = array('id'=> 16,'name' => 'Samsung','parent'=> 13,'level'=>3);
$menu1[] = array('id'=> 5,'name' => 'Contacts','parent'=> 0,'level'=>1);





$menu1[] = array('id'=> 17,'name' => 'S1','parent'=> 16,'level'=>4);
$menu1[] = array('id'=> 18,'name' => 'S1.1','parent'=> 17,'level'=>5);

print_r($menu1);

?>