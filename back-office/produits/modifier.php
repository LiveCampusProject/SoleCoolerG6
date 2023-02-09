<?php
    $js = "../js/index.js";
    $css = "../css/main.css";
    $titre = "SoleCooler";
    $bodyId = "index-backoffice";
    require_once("../inc/head.php");
    require_once("../inc/header.php");
    require_once '../inc/utils.php';

    $produit = produitModifier();
?>

<?php require_once '../inc/head.php'; ?>
<main class="main">
    <div class="container">
        <h1 class="text-center">Modifier un produit</h1>
        <form method="POST" enctype="multipart/form-data" id="addProduit-form">
            <div class="input">
                <label>
                    <div>Référence</div>
                    <input type="text" name="reference" id="reference" value="<?= $produit['reference'] ?>"required />
                </label>
            </div>
            <div class="input">
                <label>
                    <div>Libellé</div>
                    <input type="text" name="libelle" id="libelle" value="<?= $produit['libelle'] ?>"required />
                </label>
            </div>

            <div class="input">
                <label>
                    <div>Description</div>
                    <input type="text" name="description" id="description" value="<?= $produit['description'] ?>"required />
                </label>
            </div>

            <div class="input">
                <label>
                    <div>Prix</div>
                    <input type="number" name="price" id="price" value="<?= $produit['price'] ?>"required />
                </label>
            </div>

            <div class="input">
                <label>
                    <div>Choisir un fichier</div>
                    <input type="file" id="productFile" name="productFile">
                </label>
            </div>
            <div class="input">
                <img src="/back-office/inc/images/<?= $produit['image'] ?>" alt="" name="image" style="height:200px">
            </div>

            <div>
                <input type="submit" value="Envoyer"/>
            </div>
        </form>
    </div>
</main>
<?php include_once '../inc/footer.php'; ?>