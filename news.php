<?php

/*
     *  On définie le path de tout les fichiers nécéssaires et le titre de notre page 
     *  Puis on insère les élements redondants footer nav et header 
     */

$js = "";
$css = "./css/main.css";
$titre = "SoleCooler";
$bodyId = "news";
require_once("./inc/head.php");
require_once("./inc/header.php");
?>


<main>
    <div class="container">
        <h1>Actualités</h1>

        <!-- List -->
        <div class="list">

            <!-- Card -->
            <div class="card">
                <div>
                    <h2>Solecooler initie sa nouvelle production prévue pour Octobre 2022</h2>
                    <div>06/09/2022</div>
                    <p>
                        L’équipe de Solecooler à pu percevoir l’intérêt que ses clients client porte au produit, l’innovation est l’essence même du produit. Nous avons fais le choix d’une nouvelle matière pour une meilleure étanchéité des alvéoles et un usage sans limite de temps mais aussi d’un nouveau design pour une découpe plus facile de la taille EU 49,5 (US 15’’) à EU 37 (US 3.5’’).
                        On sait que vous n’êtes pas forcément des spécialistes de la thermodynamique alors nous avons opté pour un nouveaux coloris pour un repérage plus facile de la face chaude (rouge ou marron) et froide (bleue).
                        Nous avons aussi changer les alvéoles une plus grande résistance et une utilisation plus intense.
                    </p>
                </div>

                <div>
                    <div><img src="./assets/img/news/image 22.jpg" alt="img"></div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card">
                <div>
                    <h2>Nouveaux Projets de développement de notre procédé </h2>
                    <div>22/06/2022</div>
                    <p>
                        Les semelles se sont avérées être une solution naturel et écologique fiable Solecooler cherche à transposer sont savoir dans les divers domaine de la thermodynamique.
                    </p>
                </div>

                <div>
                    <div><img src="./assets/img/news/image 23.jpg" alt="img"></div>
                </div>
            </div>
            <!-- End Card -->


            <!-- Card -->
            <div class="card">
                <div>
                    <h2>SoleCooler renforce sa R&D</h2>
                    <div>07/08/2022</div>
                    <p>
                        SoleCooler bénéficie du programme 3DEXPERIENCE Works for Startups de Dassault Systems, pour la modélisation et l'amélioration du rendement de nos produits.
                    </p>
                </div>

                <div>
                    <div><img src="./assets/img/news/image 24.jpg" alt="img"></div>
                </div>
            </div>
            <!-- End Card -->

        </div>
        <!-- End List -->
    </div>
</main>



<?php
require_once("./inc/footer.php");
?>