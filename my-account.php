<?php

/*
     *  On définie le path de tout les fichiers nécéssaires et le titre de notre page 
     *  Puis on insère les élements redondants footer nav et header 
     */

$js = "";
$css = "./css/main.css";
$titre = "SoleCooler";
$bodyId = "my-account";
require_once("./inc/head.php");
require_once("./inc/header.php");
?>


<main>
    <div class="container space-arround-m">
        <h1>Mon compte</h1>
    </div>
</main>


<?php
require_once("./inc/footer.php");
?>