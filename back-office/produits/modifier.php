<?php
    $js = "../js/index.js";
    $css = "../css/main.css";
    $titre = "SoleCooler";
    $bodyId = "index-backoffice";
    require_once("../inc/head.php");
    require_once("../inc/header.php");
    // require_once("./inc/nav.php");
    require_once '../inc/utils.php';

    $produit = produitModifier();
?>

<?php require_once '../inc/head.php'; ?>

<!-- Là c'est le contenu spécifique de la page -->
<!-- Au dessus c'est habituel, toujours pareil -->
<!-- En dessous aussi -->
    <div class="container mt-3">
        <div class="row">
            <h1 class="text-center">Modifier un produit</h1>
        </div>
        
        <div class="row">
            <form method="POST">
                <div class="row">
                    <div class="col">
                        <label for="reference" class="form-label">Référence</label>
                        <input type="text" name="reference" id="reference" class="form-control" value="<?= $produit['reference'] ?>" required />
                    </div>
                    <div class="col">
                        <label for="libelle" class="form-label">Libellé</label>
                        <input type="text" name="libelle" id="libelle" class="form-control" value="<?= $produit['libelle'] ?>" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" name="description" id="description" class="form-control" value="<?= $produit['description'] ?>" required />
                    </div>
                    <div class="col">
                        <label for="price" class="form-label">Prix</label>
                        <input type="number" name="price" id="price" class="form-control" value="<?= $produit['price'] ?>" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="productFile" class="form-label">Choisir un fichier</label>
                        <input class="form-control" type="file" id="productFile" name="productFile">
                    </div>
                    <div class="col">
                        <img src="../inc/images/<?= $produit['reference'] ?>.png" alt="" style="height:200px">
                    </div>
                </div>
                
                <div class="row mt-3">
                    <div class="col text-center">
                        <input type="submit" value="Envoyer" class="btn btn-success"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php include_once '../inc/footer.php'; ?>