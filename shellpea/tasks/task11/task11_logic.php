<?php

$num = $_POST['number'];

$a = 0;
$b = 1;

echo "0<br>";
echo "1<br>";

for($i = 1; $i < ($num - 1); $i++){
    $c = $a + $b;
    echo $c . "<br>";
    $a = $b;
    $b = $c;
};

?>

<p>
    <button><a href="task11.php">Back</a></button>
</p>