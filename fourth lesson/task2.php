<?php

function extNum($num, $ext) {
    $res = $num;

    while ($ext > 1) {
        $res *= $num;
        $ext--;
    }

    return $res;
}

echo extNum(2, 4);

?>
