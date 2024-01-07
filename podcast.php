<!-- Importation du tableau podcasts -->
<?php include "./includes/podcasts.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/podcast.css?<? echo time() ?>">
    <title>Podcast</title>
</head>

<body>

    <!-- Si la valeur de l'index "id" du tableau $_GET existe (in-array) dans le tableau
        de clés du tableau $podcasts (array_keys)  -->
    <? if (in_array(($_GET["id"]), array_keys($podcasts))) {
        include "./includes/divpodcast.php";
    } else {
        include "./includes/404.php";
    }
    ?>

</body>

</html>