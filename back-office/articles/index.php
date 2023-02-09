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
$articles = articles();
 
?>

<!-- Là c'est le contenu spécifique de la page -->
<!-- Au dessus c'est habituel, toujours pareil -->

<!-- En dessous aussi -->
<main class="main">
    <div class="container">
        <div class="title-row">
            <h2>Articles</h2>
            <a href="./ajouter.php" class="add-btn">Nouvel article</a>
        </div>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Libellé</th>
                    <th>Date de publication</th>
                    <th class="text-center">Lien</th>
                    <th class="text-center">Modifier</th>
                    <th class="text-center">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($articles as $article): ?>
                    <tr>
                        <td class="text-center"><?= $article['articleID'] ?></td>
                        <td class="text-center"><?= $article['libelle'] ?></td>
                        <td class="text-center"><?= $article['date'] ?></td>
                        <td class="text-center">
                            <a href="<?= $article['lien'] ?>"><i class="fa-solid fa-link"></i></a>
                        </td>
                        <td class="text-center">
                            <a href="modifier.php?referenceArticle=<?= $article['articleID'] ?>"><span class="edit-btn">Modifier</span></a>
                        </td>
                        <td class="text-center">
                            <a href="supprimer.php?referenceArticle=<?= $article['articleID'] ?>"><span class="delete-btn">Supprimer</span></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>                       
    </div>
    <!-- Tabs navs -->
</main>
<?php require_once("../inc/footer.php"); ?>