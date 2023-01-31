<?php
/*
 *  On définie le path de tout les fichiers nécéssaires et le titre de notre page 
 *  Puis on insère les élements redondants footer nav et header 
 */

$js = "";
$css ="";
$titre = "SoleCooler";

require_once '../inc/utils.php';
// On appelle listeProduits qui renverra la liste des produits
[$titre, $description, $produits] = produits();
 
?>

<?php require_once '../inc/head.php'; ?>
<!-- Là c'est le contenu spécifique de la page -->
<!-- Au dessus c'est habituel, toujours pareil -->
<!-- En dessous aussi -->
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
                        <td scope="row"><?= $produit['id'] ?></td>
                        <td><?= $produit['libelle'] ?></td>
                        <td><?= $produit['reference'] ?></td>
                        <td><?= $produit['price'] ?> €</td>
                        <td class="text-center">
                            <a href="voir-produit.php?reference=<?= $produit['reference'] ?>">
                                Voir le produit
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="modifier.php?reference=<?= $produit['reference'] ?>"><i class="fa-solid fa-pencil"></i></a>
                        </td>
                        <td class="text-center">
                        <a href="supprimer.php?reference=<?= $produit['reference'] ?>"><i class="fa-solid fa-xmark"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<?php include_once '../inc/footer.php'; ?>