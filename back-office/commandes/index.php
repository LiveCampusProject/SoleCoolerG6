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
$commandes = commandes();

 
?>

<!-- Là c'est le contenu spécifique de la page -->
<!-- Au dessus c'est habituel, toujours pareil -->

<!-- En dessous aussi -->
<main class="main">
    <div class="container">
        

        <div class="content">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Produit</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Quantité</th>
                        <th class="text-center">Total</th>
                        <th class="text-center">Modifier</th>
                        <th class="text-center">Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($commandes as $commande): ?>
                        <tr>
                            <td><?= $commande['commandeID'] ?></td>
                            <?php $produit = getProduitbyID($commande['produitId'])?>
                            <td class="text-center"><?= $produit['libelle'] ?></td>
                            <?php $userCommande = getUserbyID($commande['userId']);?>
                            <td class="text-center"><?= $userCommande['nom'] ?></td>
                            <td class="text-center"><?= $userCommande['email'] ?></td>
                            <td class="text-center"><?= $commande['commandeDate'] ?></td>
                            <td class="text-center"><?= $commande['quantite'] ?></td>
                            <td class="text-center"><?= $commande['total'] ?></td>
                            <td class="text-center">
                                <a href="modifier.php?referenceCommande=<?= $commande['commandeID'] ?>"><span class="edit-btn">Modifier</span></a>
                            </td>
                            <td class="text-center">
                                <a href="supprimer.php?referenceCommande=<?= $commande['commandeID'] ?>"><span class="delete-btn">Supprimer</span></a>
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