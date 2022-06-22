<?php

$num = $_POST['number'];
$ext = $_POST['extent'];
$sum = $num;

for($i = 1; $i < $ext; $i++){
    $sum = $sum * $num;
};

echo $sum;

?>

<p>
    <button><a href="task12.php">Back</a></button>
</p>