<?php

$num = $_POST['number'];

$res = 1;

for($i = 1; $i <= $num; $i++){
    $res = $res * $i;
};

echo "Факториал числа $num - $res";

?>

<p>
    <button><a href="task10.php">Back</a></button>
</p>