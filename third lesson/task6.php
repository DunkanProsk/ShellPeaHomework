<?php

$row = 5;

function getRow($rowIndex) {
    $arr = [1, 1];
    $arr2 = [1];

    if ($rowIndex == 0) return [1];
    if ($rowIndex == 1) return [1, 1];

    for ($i = 1; $i < $rowIndex; $i++) {
        for ($j = 1; $j < count($arr); $j++) {
            $arr2[] = $arr[$j] + $arr[$j - 1];
        }
        $arr2[] = 1;
        $arr = $arr2;
        $arr2 = [1];
    }
    

    return $arr;
}

print_r(getRow($row));

?>
