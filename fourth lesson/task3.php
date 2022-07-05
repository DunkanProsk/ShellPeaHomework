<?php

$arr = [1,2,3,4,5,16,7,8,9,10,20,30,20,40,20,80];


function maxArr($arr, $a = 0, $b = 0) {
    if ($b == 0) { $b = count($arr); }

    $maxNum = 0;
    $index = 0;

    for ($i = $a; $i < $b; $i++) {
        if($arr[$i] > $maxNum) {
            $maxNum = $arr[$i];
            $index = $i;
        }
    }

    return $index;
}

echo maxArr($arr, 3, 8) . "\n";

?>
