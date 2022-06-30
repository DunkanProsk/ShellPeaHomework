<?php

$number = $_POST['number'];

$tiket = str_split($number , 1);

$first = 0;
$second = 0;
$key = 0;

foreach($tiket as $value){
    
    if($key < 3){
        $first = $first + $value;
    } else {
        $second = $second + $value;
    };

    $key++;
};

$result = ($first == $second) ? 'Счастливый!' : 'Не счастливый(';

echo $result;

?>

<p>
    <button><a href="task5.php">Back</a></button>
</p>