<?php

$circle = $_POST['circle'];
$square = $_POST['square'];

$d_circle = sqrt(($circle * 4) / 3.14);
$d_square = $square / 2;

if($d_circle > $d_square){
    echo 'Квадрат входит в круг';
} elseif($d_circle < $d_square){
    echo 'Круг входит в квадрат';
} else {
    echo 'Они равны';
};

?>

<p>
    <button><a href="task7.php">Back</a></button>
</p>