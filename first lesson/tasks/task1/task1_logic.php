<?php

$first = $_POST['first'];
$second = $_POST['second'];

if($first > $second){
    echo "Sum: " . ($first + $second);
} else {
    echo "Mult: " . ($first * $second); 
};

?>

<p>
    <button><a href="task1.php">Back</a></button>
</p>