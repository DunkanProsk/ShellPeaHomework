<?php

$arr = [1, 2, 3, 4, 5, 6, 7];

$maxNum = 0;
$sum = 0;

// $maxNum = max($arr); Можно упростить.

foreach ($arr as $num) {
    $sum += $num;

    if($maxNum < $num) $maxNum = $num;
}

echo ($sum / $maxNum) . "\n";

?>