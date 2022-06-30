<?php

$nums = $_POST['numbers'];

$nums_arr = explode(" ", $nums);

$sum = 0;
$val = 0;

foreach($nums_arr as $element){
    if($element == 0) break;
    $sum += $element;
    $val++;
}

echo "Колличество чисел - " . $val . " | Сумма всех чисел - " . $sum . " | Среднее арифметическое - " . ($sum / $val);

?>

<p>
    <button><a href="task18.php">Back</a></button>
</p>