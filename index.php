<!-- Importation du tableau podcasts -->
<?php include "./includes/podcasts.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css?<? echo time() ?>">
    <title>Acceuil</title>
</head>

<body>
    <h1>Podcast</h1>

    <!-- Boucle de décomposition du tableau podcasts, 
        pour chaque itération, on créé les éléments HTML voulus -->
    <?php foreach ($podcasts as $index => $podcast) { ?>
        <? echo '<div class="divPodcast" id=podcastDiv' . $index . '' ?>>
        <i>
            <?php echo $podcast["date"] ?>
        </i>
        <h2>
            <? echo $podcast["name"] ?>
        </h2>
        <p>
            <? echo $podcast["content"] ?>
        </p>
        <a href="./podcast.php?id=<?= $index ?>">Ecouter</a>
        </div>
    <?php } ?>

</body>

</html>