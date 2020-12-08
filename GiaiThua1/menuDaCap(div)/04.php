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

function recursive($source,$parent,$level,&$menu1)
{
    if (count($source>0)) {
        foreach ($source as $key => $value) {
            if ($value['parent'] == $parent) {
                $value['level'] = $level;
                $menu1[] = $value;
                unset($source[$key]);
                $newParent = $value['id'];
                recursive($source,$level+1,$menu1);

        }
    }
}
}

// foreach ($menu as $key => $value) {
//     if ($value['parent'] == 0) {
//       $value['level'] = 1;
//       $menu1[] = $value;
//       unset($menu[$key]);

//       $parent = $value['id'];
//       foreach ($menu as $key1 => $value1) {
//         if ($value1['parent'] == $parent) {
//           $value1['level'] = $value['level'] + 1;
//           $menu1[] = $value1;
//           unset($menu[$key1]);

//           $parent1 = $value1['id'];
//           foreach ($menu as $key2 => $value2) {
//             if ($value2['parent'] == $parent1) {
//               $value2['level'] = $value1['level'] + 1;
//               $menu1[] = $value2;
//               unset($menu[$key2]);
//             }
//           }
//         }
//       }
//     }
//   }

// print_r($menu1);

recursive($menu,0,1,$menu1);

foreach ($menu1 as $key => $value) {
    if($value['level']==1)
    {
        echo '<div style="border:1px solid #ccc;">+'.$value['name'].'</div>';
    }
    else{
    $padding = ($value['level']-1)*20;   
    $padding='padding-left: '.$padding.'px;';
    echo '<div style="border:1px solid #ccc;'.$padding.'">-'.$value['name'].'</div>';}
}


?>