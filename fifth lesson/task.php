<?php

echo "Enter Name: ";
$name = fgets (stream: STDIN);

echo "Enter Number: ";
$number = fgets (stream: STDIN);

$str = str_replace("\n", "", $name . " " . $number) . "\n***\n"; //Создаем строку и удаляем перенос строки оставшиеся с STDIN

$file = "/home/dunkan/Desktop/numBook.txt"; // Путь к файлу

file_put_contents($file, $str, FILE_APPEND); //Записываем данные в файл

$numBook = file_get_contents($file); //Получаем файл в переменную

$numBook = explode("\n***\n", $numBook); //Создаем массив с помощью разделителя

$numBook = array_diff ($numBook, array ('', '')); //Удаляем пустые элементы массива, хз откуда они)))

natcasesort($numBook); //Сортировка без учета регистра

file_put_contents($file, ''); // Очищаем файл

foreach($numBook as $num) {
    file_put_contents($file, $num . "\n***\n", FILE_APPEND); // Записываем данные из массива в файл
}

?>
