<?php

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

?>
