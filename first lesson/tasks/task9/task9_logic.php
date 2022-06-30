<?php

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

echo $res = ($a == $b || $a == $c || $b == $c) ? 'Треугольник равнобедренный':'Треугольник не равнобедренный';

?>

<p>
    <button><a href="task9.php">Back</a></button>
</p>