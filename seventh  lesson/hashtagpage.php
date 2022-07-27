<?php

session_start();

include "./funcs.php";

if (empty($_SESSION)) {
    header("location: signin.php");
}

$id = $_SESSION['id'];
$tag = $_GET['title'];

$selectIdTags = "SELECT id FROM Hashtags WHERE title='$tag'";
$idTag = FetchAssoc($selectIdTags)['id'];

$selectTweetId = "SELECT id_tweet FROM TweetHashtag WHERE id_tag='$idTag'";
$idTweetAll = ConnectDB($selectTweetId);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="shortcut icon" href="/img/Favicon.svg" type="image/x-icon">
    <title>Twittor</title>
</head>
<body>
    <div class="Content__header">
        <img class="Content__header__logo" onclick="document.location='index.php'" src="img/Logo.svg" height="35px">
        <div class="Content__header__title" onclick="document.location='index.php'">TWITTOR</div>
        <img class="Content__header__profile" src="img/Profile.svg" alt="Login" onclick="document.location='signin.php'" height="20px">
    </div>
    <div class="Content__center">
        <h2 class="Content__title">Tweets: <?= "#" . $tag?></h2>
        <?php foreach($idTweetAll as $idTweet):

            $selectSQLTweets = "SELECT * FROM Tweets WHERE id=" . $idTweet['id_tweet'];
            $result = ConnectDB($selectSQLTweets);?>

            <?php foreach($result as $key):

                $idCreator = $key['idCreator'];
                $idTweet = $key['id'];
                $selectUserData = "SELECT * FROM Users WHERE id='$idCreator'";
                $userDataTweet = FetchAssoc($selectUserData); ?>

                <div class="Content__tweets">
                    <img class="Content__avatar__tweets" src="img/<?=$userDataTweet['linkPhoto']?>">
                    <div>
                        <div class="Content__info__tweets">
                            <div class="Content__username__tweets"><?=$userDataTweet['userName']?></div>
                            <div class="Content__nickname__tweets">@<?=$userDataTweet['userNickname']?></div>
                            <div class="Content__date__tweets"><?=$key['tweetDateCreate']?></div>
                        </div>
                        <div class="Content__text__tweets">
                            <?=$key['tweetText']?>
                        </div>
                        <div class="Content__hashtag">

                            <?php
                                $selectAlltitle = "SELECT id_tag FROM TweetHashtag WHERE id_tweet='$idTweet'";
                                $titleAll = ConnectDB($selectAlltitle);
                            ?>
                            
                            <?php if (!empty($titleAll)): ?>
                                <?php foreach($titleAll as $title):
                                    $selectAllTags = "SELECT title FROM Hashtags WHERE id=" . $title['id_tag']; ?>
                                    <?php if (!empty(ConnectDB($selectAllTags))):
                                        $allTags = ConnectDB($selectAllTags); ?>
                                        <?php foreach ($allTags as $tag): ?>
                                            <a href=<?= "'" . "hashtagpage.php" . "?title=" . $tag['title'] . "'"?>><?="#" . $tag['title'] . "&nbsp;"; ?></a>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
</body>
</html>
