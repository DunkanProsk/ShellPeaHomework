<?php

$a = 01110100111;
$b = 11111111111;

function addBinary($a, $b) {
    $one = str_split($a);
    $two = str_split($b);
    $val = [];
    $res = [];

    $len = 0;
    $i = 0;

    if (count($one) - count($two) >= 0) {
        $len = count($one) - count($two);
    } else {
        $len = count($two) - count($one);
    }

    if (count($one) < count($two)) {
        $val = $one;
        $one = $two;
        $two = $val;
    }

    for ($k = (count($one) - 1); $k >= 0; $k--) {

        if ($k - $len >= 0) {
            switch ($one[$k] + $two[$k - $len] + $i) {
                case 0:
                    array_unshift($res, 0);
                    $i = 0;
                    break;
                case 1:
                    array_unshift($res, 1);
                    $i = 0;
                    break;
                case 2:
                    array_unshift($res, 0);
                    $i = 1;
                    break;
                case 3:
                    array_unshift($res, 1);
                    $i = 1;
                    break;
            }
        } else {
            if ($i == 1) {
                switch ($one[$k] + $i) {
                    case 0:
                        array_unshift($res, 0);
                        $i = 0;
                        break;
                    case 1:
                        array_unshift($res, 1);
                        $i = 0;
                        break;
                    case 2:
                        array_unshift($res, 0);
                        $i = 1;
                        break;
                    case 3:
                        array_unshift($res, 1);
                        $i = 1;
                        break;
                }
            } else {
                array_unshift($res, $one[$k]);
            }
        }

    }

    if ($i == 1) {
        array_unshift($res, 1);
    }

    return implode($res);

} 

echo addBinary($a, $b) . "\n";

?>
