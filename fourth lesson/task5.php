<?php

function getNum($i,$n) {
    if ($i <= $n) {
        echo $i . "\n";
        $i++;
        getNum($i, $n);
    }
}

getNum(1, 100);

?>
