<?php
require_once '../inc/utils.php';
// On appelle voirProduit qui renverra le produit recherché
[$titre, $description, $produit] = voirProduit();
?>

<?php require_once '../inc/head.php'; ?>
<!-- On voit le produit ici -->
<h1><?= $produit['libelle'] ?> (<?= $produit['reference'] ?>)</h1>
<p><?= $produit['description'] ?></p>
<em><?= $produit['price'] ?>€</em>
<?php include_once '../inc/footer.php'; ?>