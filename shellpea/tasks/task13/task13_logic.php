<?php

for($i = 1; $i < 10; $i++){

    echo $i . '&nbsp &nbsp';

    for($j = 2; $j < 10; $j++){
        echo $j * $i;
        echo $space = (($j * $i) > 9) ? '&nbsp &nbsp' : '&nbsp &nbsp &nbsp';
    }

    echo "<br>";
};

?>

<p>
    <button><a href="task13.php">Back</a></button>
</p>