<?php

$numarr = [-1,-2,-3,-4,-5];
$targ = -8;

function twoSum ($nums, $target) {

    $resultFinalZero = [];
    
    foreach ($nums as $key => $num) {
        foreach ($nums as $key2 => $num2) {
            if ($key != $key2 && (($num + $num2) == $target)) {
                $resultFinalZero[] = $key;
                $resultFinalZero[] = $key2;
                return $resultFinalZero;
            }
        }
    }
    
}

twoSum ($numarr, $targ);

?>