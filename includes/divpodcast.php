<!-- Importation du tableau podcasts -->
<? include "podcasts.php" ?>

<header class="header">
    <h1>Podcast</h1>
    <button id="return"><a href="./index.php">Retour à l'index</a></button>
</header>
<section class="divPodcast">

    <? foreach ($podcasts as $index => $podcast) {
        if ($index == $_GET["id"]) { ?>
            <? echo "<i>" . $podcast["date"] . "</i><br>" ?>
            <? echo "<h2>" . $podcast["name"] . "</h2><br>" ?>
            <? echo "<p>" . $podcast["content"] . "</p><br>" ?>
            <div class='divAudio'>
                <? echo '<audio controls preload="auto" src=' . $podcast["url"] . '></audio>' ?>
            </div>
        <? }
    } ?>

</section>