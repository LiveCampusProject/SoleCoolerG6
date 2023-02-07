<?php
/*
 *  On définie le path de tout les fichiers nécéssaires et le titre de notre page 
 *  Puis on insère les élements redondants footer nav et header 
 */


$js = "../js/index.js";
$css = "../css/main.css";
$titre = "SoleCooler";
$bodyId = "index-backoffice";
require_once("../inc/head.php");
require_once("../inc/header.php");
// require_once("./inc/nav.php");
require_once '../inc/utils.php';

// On appelle la liste des actualites
$actualites = actualites();
 
?>

<!-- Là c'est le contenu spécifique de la page -->
<!-- Au dessus c'est habituel, toujours pareil -->

<!-- En dessous aussi -->
<main class="main">
    <div class="container">
        <div class="content">
            <div class="title-row">
                <h2>Actualites</h2>
                <a href="./ajouter.php" class="add-btn">Ajouter</a>
            </div> <br><br>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Libellé</th>
                        <th>Date de publication</th>
                        <th class="text-center">Détail</th>
                        <th class="text-center">Modifier</th>
                        <th class="text-center">Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($actualites as $actualite): ?>
                        <tr>
                            <td scope="row"><?= $actualite['actualiteID'] ?></td>
                            <td><?= $actualite['libelle'] ?></td>
                            <td><?= $actualite['date'] ?></td>
                            <td class="text-center">
                                <a href="voir-actu.php?referenceActualite=<?= $actualite['actualiteID'] ?>">
                                    Voir l'actualité
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="modifier.php?referenceActualite=<?= $actualite['actualiteID'] ?>"><i class="fa-solid fa-pencil"></i></a>
                            </td>
                            <td class="text-center">
                            <a href="supprimer.php?referenceActualite=<?= $actualite['actualiteID'] ?>"><i class="fa-solid fa-xmark"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>                       
    </div>
    <!-- Tabs navs -->
</main>
<?php require_once("../inc/footer.php"); ?>