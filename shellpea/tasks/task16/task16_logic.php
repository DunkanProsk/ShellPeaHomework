<?php

$length = $_POST['length'];
$piece_length = $_POST['piece'];
$amount = $_POST['amount'];

$amount_sum = $piece_length * $amount;
$sum = intdiv($length, $piece_length);
$val = $length % $piece_length;

if($amount_sum > $length){
    echo "Ткани не хватит. | " . $sum . "шт. - Целых,  " . $val . "м. - Остаток";
} else {
    echo "Ткань успешно нарезана  | " . $amount . "шт. - Целых кусков";
}

?>

<p>
    <button><a href="task16.php">Back</a></button>
</p>