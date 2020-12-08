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
 
function deQuyLevel($array, $parent, $level, &$newArray) {
    // điều kiện dừng
    if (count($array) > 0) {
      foreach ($array as $key => $value) {
        if ($value['parent'] == $parent) {
          $value['level'] = $level;
          $newArray[] = $value;
          unset($array[$key]);
          $newParent = $value['id'];
          deQuyLevel($array, $newParent, $level + 1, $newArray);
        }
      }
    }
  }
 
  deQuyLevel($menu,0, 1, $newArray);

function cmsSelectionBox($array,$name,$style=null,$size = 0){
    $xhtml = '<select name="'.$name.'" id="'.$name.'" style="'.$style.'"size="'.$size.'";>';
    foreach($array as $key => $value)
    {
        if ($value['level']==1) {
            $xhtml.='<option value"'.$value['id'].'">+'.$value['name'].'</option>';
        }else {
            $name =str_repeat('&nbsp;',($value['level']-1)*5).'-'.$value['name'];
            $xhtml.='<option value"'.$value['id'].'">'.$name.'</option>';
        }
        
    }
    $xhtml.= '</select>';
    return $xhtml;

}

echo cmsSelectionBox($newArray,'selectbox','min-width:200px; padding:3px;',5);

?>

