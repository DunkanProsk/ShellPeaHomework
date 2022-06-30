<?php 

$arr = [2, 4, 4, 3, 6, 8, 8, 3, 2, 5, 10];
$arrUniqe = [];

foreach ($arr as $num) {
    if (empty($arrUniqe)) {
        $arrUniqe[] = $num;
        continue;
    }

    foreach ($arrUniqe as $key => $val) {
        if ($num != $val) {
            if ($key == (count($arrUniqe) - 1)) $arrUniqe[] = $num;
            continue;
        } else {
            break;
        }

    }
}

print_r($arrUniqe);

?>