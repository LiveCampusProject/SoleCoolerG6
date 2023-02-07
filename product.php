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
    <!-- Breadcrumb -->
    <?php require_once("./inc/breadcrumb.php"); ?>
    <!-- End Breadcrumb -->

    <!-- Intro -->
    <section class="intro container">
        <!-- Image -->
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
        <!-- End Image -->

        <!-- Informations -->
        <div class="info">
            <h1>Climfeet</h1>
            <p>
                Nos semelles peuvent être découpées jusqu'à la pointure 49.5 EU (15 US).
                Vous avez la possibilité de choisir de commander les semelles déjà préformer.
            </p>

            <!-- Add To Card Form -->
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
                    <input type="number" name="qty" id="qty" placeholder="1" min="0" step="1">
                </div>

                <div class="price">
                    <span class="amount">79</span> <span class="currency">€</span>
                </div>

                <button type="submit" class="button-2">Ajouter au panier</button>
            </form>
            <!-- End Add To Card Form -->

        </div>
        <!-- End Informations -->

    </section>
    <!-- End Intro -->


    <!-- Details -->
    <section class="details container">
        <h2>Informations</h2>

        <div>
            <p>
                Selon vos objectifs, la course à pied peut mettre votre corps à rude épreuve en hiver. Nous avons donc conçu nos semelles CLIMFEET afin que vos performances ne soient pas diminuées par des pieds froids.
                <br>
                Nos semelles vous apporteront un confort thermique et même mécanique inégalable, sans s’encombrer de batteries car activées par vos propres pas et donc sans empreinte carbone.
                <br>
                Les semelles CLIMFEET comportent des centaines de mini pompes à chaleur miniatures brevetées, constituées de 2 alvéoles remplies d’air et c’est votre pied qui joue le rôle de compresseur (la compression de l’air l’échauffe naturellement) et c’est l’hyper-élasticité de notre matériau qui joue le rôle de détendeur (la détente de l’air au travers d’une tuyère le refroidit naturellement).
            </p>

            <a target="_blank" href="https://cdn.website-editor.net/s/441c284abd2648ffa97a9d57623833bc/files/uploaded/NE005.NoticeTechniqueFR.AB.01.09.22.pdf?Expires=1678123037&Signature=VYs8~EyjlwKkFm7DH6vA7DPJliCdvb1YboeOUELZqgSPRCU7AURE7rPvOqOx3Qz9yrrOukWiBeoSt8YQtvwbl~nlw~mHu7RbdJiusyNnfFoV5-zQA5gk54g5vGtscfgh8jne6FnIFjWwYNWLw-yuAdr56Qn0Ys3GXB~ilM~JnC4ar7EYTzMCrYvMOzlEd9xMnOdIYwdjRqKYhmHJoP4yX3uxD26cDp7wvBFhWZBAwi4tNr2WI3kkHTkAnT~ZJ5Gf9l0JNPJK~4IRM-9C7k7Z8qK-6lME~6LZgN2AhF4npQVyHCUprCZkyert8KR4lNFz9sm6lDWYu2vVL1k0LFTMnQ__&Key-Pair-Id=K2NXBXLF010TJW">
                En savoir plus sur le fonctionnement de ClimFeet
            </a>
        </div>


        <h2>Après livraison</h2>

        <div>
            <h3>Comment ouvrir l'emballage des Climfeet</h3>

            <div class="open-box">
                <div>
                    <ol>
                        <li>Prendre un outil pointu (pas forcément coupant)</li>
                        <li>Insérer le dans l'espace entre les deux parties bleue et rouge</li>
                        <li>Découper l'étiquette</li>
                        <li>Tirer les deux parties pour les séparer</li>
                    </ol>

                    <!-- <p>
                        Nous avons voulu limiter notre impact sur l’environnement en choisissant un seul emballage pour protéger ET expédier vos semelles. Le matériau de cet emballage est en polypropylène ou polyéthylène HD recyclable. Gardez-le car il servira ainsi au retour pour le renouvellement de vos semelles pour être recyclées (merci d’y joindre aussi la partie inutile des semelles lors de leurs découpes). Ainsi, il n’y aura pas de déchets dans la nature. Vous bénéficierez alors d’un discount de 10% pour votre nouvelle commande.

                        Les couleurs bleue et rouge permettent de rappeler que nos semelles sont réversibles (chaud et froid) mais c’est aussi, avec l’étiquette blanche au milieu, un petit rappel à notre cher drapeau français car c’est un produit entièrement conçu en France. Pour ouvrir l’emballage, prenez un petit outil pointu (mais pas forcément coupant, attention à vous) et insérez le dans l’espace entre les parties bleue et rouge reconnaissable au petit décroché, pour découper l’étiquette. Vous pouvez alors tirer les 2 parties pour les séparer (elles sont juste emboitées). Vous trouverez aussi, à l’intérieur, une pochette en lin qui vous est offerte pour emmener vos Climfeet au bout du monde...
                    </p> -->
                </div>

                <img src="./assets/img/products/climfeet/emballage.png" alt="">
            </div>

            <a href="#" target="_blank" rel="noopener noreferrer">
                        En savoir plus sur l'emballage
                    </a>
        </div>

        <div>
            <h3>Comment découper vos semelles</h3>

            <img src="./assets/img/products/climfeet/cut.png" alt="">

            <iframe width="480" height="270" src="https://www.youtube.com/embed/8ZZGjnxTXnc" title="how to cut ExtreMWear products" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>


    </section>
    <!-- End Details -->
</main>

<?php
require_once("./inc/footer.php");
?>