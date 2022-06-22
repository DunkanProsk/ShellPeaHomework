<?php

$sum = 0;
$i = 1;

while($i <= 99){
    if($i % 2){
        $sum += $i; 
    };
    $i++;
};

echo "Сумма всех нечетных чисел от 1 до 99 равна - " . $sum;

?>

<p>
    <button><a href="task14.php">Back</a></button>
</p>