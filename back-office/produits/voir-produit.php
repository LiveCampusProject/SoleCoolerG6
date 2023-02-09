<?php
$js = "../js/index.js";
$css = "../css/main.css";
$titre = "SoleCooler";
$bodyId = "index-backoffice";
require_once("../inc/head.php");
require_once("../inc/header.php");
require_once '../inc/utils.php';
// On appelle voirProduit qui renverra le produit recherché
$produit = voirProduit();
?>

<!-- On voit le produit ici -->
<main class="main">
    <div class="container">
        <div class="voir-produit">
            <div>
                <img src="/back-office/inc/images/<?= $produit['image'] ?>" alt="" name="image" style="height=200px">
            </div>
            <div style="margin-left: 30px">
                <h1><?= $produit['libelle'] ?></h1>
                <span>Référence : <?= $produit['reference'] ?></span>

                <p><?= $produit['description'] ?></p>
                <h4>Prix : <?= $produit['price'] ?>€</p>      
            </div>
        </div>
    </div>
    
</main>

<?php include_once '../inc/footer.php'; ?>