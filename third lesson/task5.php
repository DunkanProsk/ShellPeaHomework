<?php

$digits = [7,2,8,5,0,9,1,2,9,5,3,6,6,7,3,2,8,4,3,7,9,5,7,7,4,7,4,9,4,7,0,1,1,1,7,4,0,0,6];

function plusOne($digits) {

    $arr = $digits;
    $one = 1;

    for ($i = count($arr) - 1; $i >= 0; $i--) {
        if ($arr[$i] == 9) {
            $arr[$i] = 0;
            if ($i == 0) array_unshift($arr, $one);
        } else {
            $arr[$i] = $arr[$i] + 1;
            break;
        }
    }

    return $arr;
        
}

plusOne($digits);

?>