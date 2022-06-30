<?php

$number = $_POST['number'];

if($number > 1000) {
    echo ($number * 85) / 100;
} else {
    echo 'Скидка не предоставляется';
};

?>

<p>
    <button><a href="task6.php">Back</a></button>
</p>