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
                <img src="./assets/img/products/climfeet/paire_new_shape90 1.png" alt="Paire Climfeet">
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

        <div class="description">
            <p>
                Selon vos objectifs, la course à pied peut mettre votre corps à rude épreuve en hiver. Nous avons donc conçu nos semelles CLIMFEET afin que vos performances ne soient pas diminuées par des pieds froids.
                <br>
                <br>
                Nos semelles vous apporteront un confort thermique et même mécanique inégalable, sans s’encombrer de batteries car activées par vos propres pas et donc sans empreinte carbone.
                <br>
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
                </div>

                <!-- <img src="./assets/img/products/climfeet/emballage.png" alt="Emballage Climfeet"> -->
                <svg id="box" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 196.84 1106.96" height="400px" width="50%">
                    <rect x="55.82" width="54.17" height="1106.96" style="fill:none" />
                    <g id="bottom">
                        <polygon points="181.93 511.02 171.74 865.33 75.96 906.27 9.24 848.14 7.45 496.07 80.26 528.18 81.25 528.62 181.93 511.02" style="fill:#1757a1" />
                        <polygon points="181.93 511.02 81.25 528.62 80.26 528.18 7.45 496.07 98.79 480.88 181.93 511.02" style="fill:#1757a1;stroke:#000;stroke-miterlimit:10" />
                        <line x1="81.25" y1="528.61" x2="75.96" y2="906.27" style="fill:none;stroke:#1720a1;stroke-miterlimit:10" />
                    </g>
                    <g id="top">
                        <polygon points="196.84 175.71 196.84 190.9 190.9 198.82 181.94 510.43 181.93 511.02 81.25 528.62 80.26 528.18 7.45 496.07 5.94 200.15 0 192.22 0 175.71 84.55 152.59 196.84 175.71" style="fill:#e74138" />
                        <line x1="84.55" y1="152.58" x2="81.25" y2="528.61" style="fill:none;stroke:#a90000;stroke-miterlimit:10" />
                    </g>
                    <g id="middle">
                        <polygon points="5.45 426 7.45 661.43 78.79 704.42 179.47 676.64 186.33 431.85 81.95 449.19 5.45 426" style="fill:#fff;stroke:#000;stroke-miterlimit:10" />
                        <polyline id="cut" points="183.79 559.92 83 576.67 6.5 553.48" style="fill:#fff;stroke:#000;stroke-miterlimit:10" />
                    </g>
                </svg>
            </div>

            <a href="https://cdn.website-editor.net/s/441c284abd2648ffa97a9d57623833bc/files/uploaded/comment%2520ouvrir.pdf?Expires=1678465876&Signature=dNCZC~pahUDI-MnWz098wAmH3pXRRHhiofJ-7e7cfO74Qq5ntM~lxOf61sTEVxtTNk2lyVkabtoLMJTDMfzQuj7N8A--tyEykO9Qp~U-UedFS3240iSQQlegSzjc7~54JO2q2HZw3AF8lSz9-DHS-nkuDKSR~4lzlS7Mf-M7izdPdjDnvTE41fEfZ-jvnYrT5myenSL778tkOg8B2Uw2AlC9IBDy1gpuaRWpNW1pOPQDCoG-9Jm0C-rxCfZ5TP0aG0CJvymI6j9ip8gec-Vrw5niDHImWPF-4Y2LYSjUt8oNssdPVPExBx2e2DgQnWGV7IhSaqbv5rcc7GY~3cBlGQ__&Key-Pair-Id=K2NXBXLF010TJW" target="_blank" rel="noopener noreferrer">
                En savoir plus sur l'emballage
            </a>
        </div>

        <div id="cut">
            <h3>Comment découper vos semelles</h3>

            <div>
                <iframe width="480" height="270" src="https://www.youtube.com/embed/8ZZGjnxTXnc" title="how to cut ExtreMWear products" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                <ol>
                    <li>
                        <div>Enlever la semelle</div>
                        <img src="./assets/img/products/climfeet/cut_step_1.png" alt="Comment découper vos semelles - 1">
                    </li>

                    <li>
                        <div>Tracez la forme</div>
                        <img src="./assets/img/products/climfeet/cut_step_2.png" alt="Comment découper vos semelles - 2">
                    </li>

                    <li>
                        <div>Découpez prudemment</div>
                        <img src="./assets/img/products/climfeet/cut_step_3.png" alt="Comment découper vos semelles - 3">
                    </li>

                    <li>
                        <div>Insérez et profitez !</div>
                        <img src="./assets/img/products/climfeet/cut_step_4.png" alt="Comment découper vos semelles - 4">
                    </li>
                </ol>
            </div>

        </div>


    </section>
    <!-- End Details -->
</main>

<?php
require_once("./inc/footer.php");
?>