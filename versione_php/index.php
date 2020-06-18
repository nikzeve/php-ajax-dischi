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
                <img src=<?php echo $cd["poster"] ?> alt="">
                <p class="white margBottom"id="titolo"></p>
                <p class="white margBottom"></p>
                <p class="white margBottom"></p>
                <p class="white margBottom"></p>
            </div>
        <?php } ?>

        </div>


    </body>
</html>
