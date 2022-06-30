<?php

$num = $_POST['number'];

echo $res = ($num >= -5 && $num <= 3) ? 'Число пренадлеждит интервалу (-5,3)' : 'Число не пренадлеждит интервалу (-5,3)';

?>

<p>
    <button><a href="task8.php">Back</a></button>
</p>