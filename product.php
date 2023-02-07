<?php

/*
     *  On définie le path de tout les fichiers nécéssaires et le titre de notre page 
     *  Puis on insère les élements redondants footer nav et header 
     */

$js = "";
$css = "./css/main.css";
$titre = "SoleCooler";
$bodyId = "product";
require_once("./inc/head.php");
require_once("./inc/header.php");
?>

<main>
    <?php require_once("./inc/breadcrumb.php"); ?>

    <div class="intro container">
        <div class="img">
            <div class="cover">
                <img src="./assets/img/products/climfeet/SoleCooler - Climfeet.png" alt="Climfeet par SoleCooler">
                <svg xmlns="http://www.w3.org/2000/svg" width="302" height="302" viewBox="0 0 302 302" fill="none">
                    <path d="M296.351 185.119C275.599 262.566 184.441 318.051 107.034 297.31C29.6283 276.569 -15.4821 190.41 5.26979 112.963C26.0217 35.5154 117.502 -15.5507 194.908 5.19017C272.314 25.9311 317.103 107.672 296.351 185.119Z" fill="#F3D9DA" />
                </svg>
            </div>

            <div class="gallery">
                <img src="./assets/img/products/climfeet/SoleCooler - Climfeet.png" alt="Climfeet par SoleCooler">
                <img src="./assets/img/products/climfeet/paire_new_shape90 1.png">
            </div>
        </div>

        <div class="info">
            <h1>Climfeet</h1>
            <p>
                Nos semelles peuvent être découpées jusqu'à la pointure 49.5 EU (15 US).
                Vous avez la possibilité de choisir de commander les semelles déjà préformer.
            </p>

            <form action="">
                <div class="model">
                    <span class="section">Modèle</span>

                    <div class="wrap">
                        <input type="radio" name="modele" id="classique">
                        <label for="classique">Classique</label>

                        <input type="radio" name="modele" id="preformees">
                        <label for="preformees">Préformées</label>
                    </div>
                </div>

                <div class="quantity">
                    <label class="section" for="qty">Quantité</label>
                    <input type="number" name="qty" id="qty">
                </div>

                <div class="price">
                    <span class="amount">79</span> <span class="currency">€</span>
                </div>

                <button type="submit" class="button-2">Ajouter au panier</button>
            </form>
        </div>
    </div>
</main>

<?php
require_once("./inc/footer.php");
?>