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

// On appelle listeProduits qui renverra la liste des produits
[$titre, $description, $produits] = produits();
 
?>

<!-- Là c'est le contenu spécifique de la page -->
<!-- Au dessus c'est habituel, toujours pareil -->

<!-- En dessous aussi -->
<main class="main">
    <div class="container">
        <div class="content">
            <div class="title-row">
                <h2>Produits</h2>
                <a href="./ajouter.php" class="add-btn">Nouveau produit</a>
            </div>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Libellé</th>
                        <th>reference</th>
                        <th>price</th>
                        <th class="text-center">Détail</th>
                        <th class="text-center">Modifier</th>
                        <th class="text-center">Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($produits as $produit): ?>
                        <tr>
                            <td class="text-center"><?= $produit['produitID'] ?></td>
                            <td class="text-center"><?= $produit['libelle'] ?></td>
                            <td class="text-center"><?= $produit['reference'] ?></td>
                            <td class="text-center"><?= $produit['price'] ?> €</td>
                            <td class="text-center">
                                <a href="voir-produit.php?referenceProduit=<?= $produit['reference'] ?>">
                                    Voir le produit
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="modifier.php?referenceProduit=<?= $produit['reference'] ?>"><span class="edit-btn">Modifier</span></a>
                            </td>
                            <td class="text-center">
                            <a href="supprimer.php?referenceProduit=<?= $produit['reference'] ?>"><span class="delete-btn">Supprimer</span></a>
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