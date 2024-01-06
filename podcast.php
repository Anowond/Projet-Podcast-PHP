<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/podcast.css">
    <title>podcast</title>
</head>

<body>
    <header class="header">
        <h1>Podcast</h1>
        <button id="return"><a href="./index.php">Retour à l'index</a></button>
    </header>
    <section class="podcast">
        <?php echo "<i>" . $_GET["date"] . "</i><br>" ?>
        <?php echo "<h2>" . $_GET["name"] . "</h2><br>" ?>
        <?php echo "<p>" . $_GET["content"] . "</p><br>" ?>
        <?php echo '<audio controls src=' . $_GET["url"] . '></audio>' ?>
    </section>
</body>

</html>