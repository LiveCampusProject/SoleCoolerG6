<?php
/*
 *  On définie le path de tout les fichiers nécéssaires et le titre de notre page 
 *  Puis on insère les élements redondants footer nav et header 
 */

$js = "";
$css ="";
$bodyId = "index-backoffice";
$titre = "SoleCooler";

require_once './inc/utils.php';
// On appelle listeProduits qui renverra la liste des produits
[$titre, $description, $produits] = produits();
$avis = avis();
$users = users();
$commandes = commandes();
 
?>

<?php require_once './inc/head.php'; ?>
<!-- Là c'est le contenu spécifique de la page -->
<!-- Au dessus c'est habituel, toujours pareil -->

<!-- En dessous aussi -->
<div class="m-2">
    <!-- Tabs navs -->
    <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="produits-tab" data-mdb-toggle="tab" href="#produits-tabs" role="tab" aria-controls="produits-tab" aria-selected="true">Produits</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="avis-tab" data-mdb-toggle="tab" href="#avis-tabs" role="tab" aria-controls="avis-tab" aria-selected="false">Avis</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="commandes-tab" data-mdb-toggle="tab" href="#commandes-tabs" role="tab" aria-controls="commandes-tab" aria-selected="false">Commandes</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="users-tab" data-mdb-toggle="tab" href="#users-tabs" role="tab" aria-controls="users-tab" aria-selected="false">Utilisateurs</a>
        </li>
    </ul>

    <!-- Tabs content -->
    <div class="tab-content" id="ex1-content">
    <div class="tab-pane fade show active" id="produits-tabs" role="tabpanel" aria-labelledby="produits-tab">
        <div class="container mt-3">
            <div class="row d-flex align-items-center">
                <div class="col">
                    <h1>Produits</h1>
                </div>
                <div class="col">
                    <a href="./ajouter.php"><button class="btn btn-success float-end">Ajouter un produit</button></a>
                </div>
            </div>
            <div class="row">
                <table class="table">
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
                                <td scope="row"><?= $produit['produitID'] ?></td>
                                <td><?= $produit['libelle'] ?></td>
                                <td><?= $produit['reference'] ?></td>
                                <td><?= $produit['price'] ?> €</td>
                                <td class="text-center">
                                    <a href="voir-details.php?referenceProduit=<?= $produit['reference'] ?>">
                                        Voir le produit
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="modifier.php?referenceProduit=<?= $produit['reference'] ?>"><i class="fa-solid fa-pencil"></i></a>
                                </td>
                                <td class="text-center">
                                <a href="supprimer.php?referenceProduit=<?= $produit['reference'] ?>"><i class="fa-solid fa-xmark"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="avis-tabs" role="tabpanel" aria-labelledby="avis-tab">
        <div class="container mt-3">
                <div class="row d-flex align-items-center">
                    <div class="col">
                        <h1>Avis</h1>
                    </div>
                </div>
                <div class="row">
                    <table class="table">
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
                                    <td scope="row"><?= $avi['avisID'] ?></td>
                                    <td><?= $avi['userID'] ?></td>
                                    <td><?= $avi['note'] ?></td>
                                    <td><?= $avi['description'] ?></td>
                                    <td class="text-center">
                                        <a href="voir-details.php?referenceAvis=<?= $avi['avisID'] ?>">
                                            Voir avis
                                        </a>
                                    </td>
                                    <td class="text-center">
                                    <a href="supprimer.php?referenceAvis=<?= $avi['avisID'] ?>"><i class="fa-solid fa-xmark"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
    <div class="tab-pane fade" id="commandes-tabs" role="tabpanel" aria-labelledby="users-tab">
    <div class="container mt-3">
            <div class="row d-flex align-items-center">
                <div class="col">
                    <h1>Commandes</h1>
                </div>
            </div>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Produit</th>
                            <th>User</th>
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
                                <td scope="row"><?= $commande['commandeID'] ?></td>
                                <td><?= $commande['produitId'] ?></td>
                                <td><?= $commande['userId'] ?></td>
                                <td class="text-center"><?= $commande['commandeDate'] ?></td>
                                <td class="text-center"><?= $commande['quantite'] ?></td>
                                <td class="text-center"><?= $commande['total'] ?></td>
                                <td class="text-center">
                                    <a href="modifier.php?referenceCommande=<?= $commande['commandeID'] ?>"><i class="fa-solid fa-pencil"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="supprimer.php?referenceCommande=<?= $commande['commandeID'] ?>"><i class="fa-solid fa-xmark"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="users-tabs" role="tabpanel" aria-labelledby="users-tab">
        <div class="container mt-3">
            <div class="row d-flex align-items-center">
                <div class="col">
                    <h1>Utilisateurs</h1>
                </div>
                <div class="col">
                    <a href="./ajouter-utilisateur.php"><button class="btn btn-success float-end">Ajouter un utilisateur</button></a>
                </div>
            </div>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th class="text-center">isAdmin</th>
                            <th class="text-center">Date de création</th>
                            <th class="text-center">Modifier</th>
                            <th class="text-center">Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                            <tr>
                                <td scope="row"><?= $user['userID'] ?></td>
                                <td><?= $user['nom'] ?></td>
                                <td><?= $user['email'] ?></td>
                                <td class="text-center">
                                    <?php 
                                        if($user['isAdmin'] == 1){
                                            echo 'Oui';
                                        }else if($user['isAdmin'] == 0){
                                            echo 'Non';
                                        }
                                    ?>
                                </td>
                                <td class="text-center"><?= $user['registerDate'] ?></td>
                                <td class="text-center">
                                    <a href="modifier.php?referenceUser=<?= $user['userID'] ?>"><i class="fa-solid fa-pencil"></i></a>
                                </td>
                                <td class="text-center">
                                <a href="supprimer.php?referenceUser=<?= $user['userID'] ?>"><i class="fa-solid fa-xmark"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php include_once './inc/footer.php'; ?>