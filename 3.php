<?php
function a($arr){
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
    }
    return $result;
}
 echo a(array(1,3,5,7,9,));