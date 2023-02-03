<?php
require_once './inc/utils.php';
// On appelle voirProduit qui renverra le produit recherché
$produit = voirProduit();
$avis = voirAvis()
?>

<?php require_once './inc/head.php'; ?>
<!-- On voit le produit ici -->

<?php if(isset($produit) || $produit != null){?>
    <h1><?= $produit['libelle'] ?> (<?= $produit['reference'] ?>)</h1>
    <p><?= $produit['description'] ?></p>
    <em><?= $produit['price'] ?>€</em>
<?php }else if(isset($avis) || $avis != null){ ?>
    <h1><?= $avis['userID'] ?></h1>
    <p><?= $avis['note'] ?></p>
    <em><?= $avis['description'] ?></em>
<?php } ?>
<?php include_once './inc/footer.php'; ?>