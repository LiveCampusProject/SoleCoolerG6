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

        <div>
            <div class="intro">
                <img src="./assets/exemple/user.jpg" alt="img">
                <div class="name">Bonjour ...</div>
            </div>

            <div class="block-1">
                <a href="#">Gestion de compte</a>
                <a href="#">Suivre ma commande</a>
                <a href="#">Mes commandes</a>
                <a href="#">Aides</a>
            </div>

            <div class="block-2">
                <a href="./logout.php">Déconnexion</a>
                <a href="#">Changer de compte</a>
            </div>
        </div>
    </div>
</main>


<?php
require_once("./inc/footer.php");
?>