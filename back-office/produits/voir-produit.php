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
        

        <div class="content">
            <h1><?= $produit['libelle'] ?> (<?= $produit['reference'] ?>)</h1>
            <p><?= $produit['description'] ?></p>
            <em><?= $produit['price'] ?>€</em>
        </div>                       
    </div>
    
<main class="main">

<?php include_once '../inc/footer.php'; ?>