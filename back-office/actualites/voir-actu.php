<?php
$js = "../js/index.js";
$css = "../css/main.css";
$titre = "SoleCooler";
$bodyId = "index-backoffice";
require_once("../inc/head.php");
require_once("../inc/header.php");
require_once '../inc/utils.php';
// On appelle voirProduit qui renverra le produit recherché
$actualite = voirActu();
?>

<!-- On voit le produit ici -->
<main class="main">
<div class="container">
        

        <div class="content">
            <h1><?= $actualite['libelle'] ?></h1>
            <p><?= $actualite['date'] ?></p>
            <img src="/back-office/inc/images/actualites/<?= $actualite['image'] ?>" alt="" name="image" style="height=200px">
            <p><?= $actualite['description'] ?></p>
        </div>                       
    </div>
    
</main>

<?php include_once '../inc/footer.php'; ?>