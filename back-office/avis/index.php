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

// On appelle avis() qui renverra la liste des avis
$avis = avis();
 
?>

<!-- Là c'est le contenu spécifique de la page -->
<!-- Au dessus c'est habituel, toujours pareil -->

<!-- En dessous aussi -->
<main class="main">
    <div class="container">
        <div class="title-row">
            <h2>Avis</h2>
        </div>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Utilisateur</th>
                    <th>Note</th>
                    <th>description</th>
                    <th class="text-center">Détail</th>
                    <th class="text-center">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($avis as $avi): ?>
                    <tr>
                        <td class="text-center"><?= $avi['avisID'] ?></td>
                        <?php $userCommande = getUserbyID($avi['userID']);?>
                        <td class="text-center"><?= $userCommande['nom'] ?></td>
                        <td class="text-center"><?= $avi['note'] ?></td>
                        <td class="text-center"><?= $avi['description'] ?></td>
                        <td class="text-center">
                            <a href="voir-avis.php?referenceAvis=<?= $avi['avisID'] ?>">
                                Voir avis
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="supprimer.php?referenceAvis=<?= $avi['avisID'] ?>">
                                <span class="delete-btn">Supprimer</span>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>                       
    </div>
    <!-- Tabs navs -->
</main>
<?php require_once("../inc/footer.php"); ?>