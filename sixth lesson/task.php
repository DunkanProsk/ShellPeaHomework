<?php

// -------------------------------------------------------------------------------------------------------------------------------

// Commands for mysql

// CREATE DATABASE Phone_book;
// USE Phone_book;
// CREATE TABLE contacts (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255) NOT NULL, number VARCHAR(20) NOT NULL);

// -------------------------------------------------------------------------------------------------------------------------------

// Terminal commands to install the library

// sudo apt-get install wget
// wget http://pear.php.net/go-pear.phar
// sudo apt install php-pear
// sudo pear channel-update "pear.php.net"
// sudo pear install Console_Table

// -------------------------------------------------------------------------------------------------------------------------------

$mysqli = mysqli_connect('localhost','root','','Phone_book');

echo "View phonebook or Create new contact?(v/c): ";
$command = strtolower(str_replace("\n", "",fgets (stream: STDIN)));

switch ($command) {
    case "v":
        showDatabase($mysqli);
        break;
    case "c":
        createNew($mysqli);
        break;
    default:
        echo "unknown command\n";
        break;
}

function showDatabase($mysqli) {
    require_once 'Console/Table.php';

    $query = "SELECT name, number FROM contacts ORDER BY name";
    $contacts = mysqli_query($mysqli, $query);

    $result = new Console_Table();

    $result->setHeaders(array('Name', 'Number'));

    foreach($contacts as $row) {
        $result->addRow(array($row['name'], $row['number']));
    }

    echo $result->getTable();

}

function createNew($mysqli) {
    echo 'Enter name: ';
    $name = str_replace("\n", "",fgets (stream: STDIN));

    echo 'Enter phone number: ';
    $number = str_replace("\n", "",fgets (stream: STDIN));

    $query = "INSERT INTO contacts (name, number) VALUES ('$name','$number')";
    $addNewContact = mysqli_query($mysqli, $query);
    
    echo "Contact added successfully\n";
}

?>
