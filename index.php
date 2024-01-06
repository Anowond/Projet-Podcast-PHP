<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css">
    <title>Podcast</title>
</head>

<body>
    <h1>Podcast</h1>

    <?php

    include "./includes/podcasts.php";

    foreach ($podcasts as $podcast) {
        echo "<i>" . $podcast["date"] . "</i><br>";
        echo "<h2>" . $podcast["name"] . "</h2><br>";
        echo "<p>" . $podcast["content"] . "</p><br>";
        echo "<a href='./podcast.php?name=" . $podcast["name"] . "&date=" . $podcast["date"] . "&content=" . $podcast["content"] . "&url=" . $podcast["url"] . "'>Envoyer</a>";
    }
    ?>
</body>

</html>