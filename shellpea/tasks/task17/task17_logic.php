<?php

$height = $_POST['height'];

$space = "&nbsp";
$slash = "^";

$val_space = $height - 1; 

for($i = 1; $i <= $height * 2; $i += 2){

    $string = "";
    $l = $val_space;

    while($l >= 1){
        $string .= $space;
        $l--;
    };

    for($j = 1; $j <= $i; $j++){
        $string .= $slash;
    };

    echo $string . "<br>";
    $val_space--;

};

//Из за разницы ширины, в написании шрифта, символов "Space" и "^", треугольник выглядит криво.
//По примеру из условия задачи, вся отрисовка правильная. 

?>

<p>
    <button><a href="task17.php">Back</a></button>
</p>