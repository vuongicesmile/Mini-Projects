<?php
  $x = 11;

  $int_options = array('options' => array('min_range' => 4, 'max_range' => 10));
  if(filter_var($x, FILTER_VALIDATE_INT, $int_options)){
    echo 'thỏa điều kiện';
  }else {
    echo 'không thỏa điều kiện';
  }
?>