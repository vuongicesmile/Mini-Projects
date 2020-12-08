<?php

// function checkNumber($number) {
//     return($number % 2 ==0) ? "so chan" : "so le";
// }

session_start();
$_SESSION['function']='<?php

function checkNumber($number) {
    return($number % 2 ==0) ? "so chan" : "so le";
}?>';

eval('?>'.$_SESSION['function']);


echo checkNumber(4);
?>