<?php

session_start();

include "./funcs.php";

if (empty($_SESSION)) {
    header("location: signin.php");
}

$idTweet = $_GET['id_tweet'];
$id = $_SESSION['id'];

$selectDataUser = "SELECT idCreator FROM Tweets WHERE id='$idTweet'";
$idCreatorTweet = FetchAssoc($selectDataUser)['idCreator'];


if ($id == $idCreatorTweet) {
    $deleteTweet = "DELETE FROM Tweets WHERE id='$idTweet'";
    ConnectDB($deleteTweet);
}

header("location: index.php");

?>