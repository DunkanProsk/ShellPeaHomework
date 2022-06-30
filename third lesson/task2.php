<?php

$arr = [-4, -2, -6, -1, -9, 0, 2, -3];

foreach ($arr as $key => $num) {
    if ($num > 0) {
        echo $key . " - Индекс | " . $num . " - Значение \n";
        break;
    }
}

?>