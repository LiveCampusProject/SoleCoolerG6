<?php
$js = "../js/index.js";
$css = "../css/main.css";
$titre = "SoleCooler";
$bodyId = "index-backoffice";
require_once("../inc/head.php");
require_once("../inc/header.php");
require_once '../inc/utils.php';

ajouterProduit();
?>

<?php require_once '../inc/head.php'; ?>

<main class="main">
    <div class="container">
        <h1 class="text-center">Ajouter un produit</h1>
        <form method="POST" enctype="multipart/form-data" id="addProduit-form">
            <div class="input">
                <label>
                    <div>Référence</div>
                    <input type="text" name="reference" id="reference" required />
                </label>
            </div>
            <div class="input">
                <label>
                    <div>Libellé</div>
                    <input type="text" name="libelle" id="libelle" required />
                </label>
            </div>

            <div class="input">
                <label>
                    <div>Description</div>
                    <input type="text" name="description" id="description" required />
                </label>
            </div>

            <div class="input">
                <label>
                    <div>Prix</div>
                    <input type="number" name="price" id="price" required />
                </label>
            </div>

            <div class="input">
                <label>
                    <div>Choisir un fichier</div>
                    <input type="file" id="productFile" name="productFile">
                </label>
            </div>

            <div>
                <input type="submit" value="Envoyer"/>
            </div>
        </form>
    </div>
</main>

<?php include_once '../inc/footer.php'; ?>