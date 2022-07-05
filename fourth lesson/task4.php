<?php

$arr = parsArr();

function parsArr() {
    
    $arrs = [];

    for ($i = 0; $i < 10; $i++) {
        $arr = [];
        
        for ($j = 0; $j < 10; $j++) {
            $arr[$j] = rand(0, 100);
        }

        $arrs[$i] = $arr;
    }

    return $arrs;
}

function sumNum($arrs) {

    $sum = 0;

    foreach ($arrs as $arr) {
        foreach ($arr as $num) {
            $sum += $num;
        }
    }

    return $sum;
}

function findMax($arrs) {

    $sum = 0;
    $maxSum = [];

    foreach ($arrs as $key => $arr) {
        foreach ($arr as $num) {
            $sum += $num;
        }

        $maxSum[] = $sum;
        $sum = 0;
    }

    $indexMax = array_keys($maxSum, max($maxSum))[0];

    echo "Массив с максимальной суммой элементов № $indexMax, Сумма его элементов $maxSum[$indexMax]\n";
    print_r($arrs[$indexMax]);
}

print_r($arr);
echo "\nСумма всех элементов - " . sumNum($arr) . "\n";

findMax($arr);

?>
