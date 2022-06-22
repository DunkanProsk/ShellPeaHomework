<?php

$number = $_POST['number'];

switch($number) {
    case 29:
        echo 'Попал';
        break;
    case ($number > 29):
        echo 'Перелёт';
        break;
    case ($number >= 0 && $number <= 28):
        echo 'Недолёт';
        break;
    case ($number < 0):
        echo 'Не бей по своим';
        break;
    default:
        echo 'lol';
};

?>

<p>
    <button><a href="task4.php">Back</a></button>
</p>