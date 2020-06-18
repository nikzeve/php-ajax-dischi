<?php
    require "../database/lista_cd.php";
 ?>



<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../public/style.css">
        <title>Dischi musicali</title>
    </head>
    <body>
        <div class="container">
        <?php foreach ($dischi as $cd) { ?>
            <div class="cd">
                <img src=<?php echo $cd["poster"]; ?> alt="">
                <p class="white margBottom"id="titolo"> <?php echo $cd["title"]; ?> </p>
                <p class="white margBottom"> <?php echo $cd["author"]; ?> </p>
                <p class="white margBottom"> <?php echo $cd["genre"]; ?> </p>
                <p class="white margBottom"> <?php echo $cd["year"]; ?> </p>
            </div>
        <?php } ?>
        </div>
    </body>
</html>
