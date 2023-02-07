<?php
    $js = "../js/index.js";
    $css = "../css/main.css";
    $titre = "SoleCooler";
    $bodyId = "index-backoffice";
    require_once("../inc/head.php");
    require_once("../inc/header.php");
    // require_once("./inc/nav.php");
    require_once '../inc/utils.php';

    $actualite = actuModifier();
?>

<?php require_once '../inc/head.php'; ?>

<!-- Là c'est le contenu spécifique de la page -->
<!-- Au dessus c'est habituel, toujours pareil -->
<!-- En dessous aussi -->
    <div class="container mt-3">
        <div class="row">
            <h1 class="text-center">Modifier une actualité</h1>
        </div>
        
        <div class="row">
            <form method="POST">
                <div class="row">
                    <div class="col">
                        <label for="libelle" class="form-label">Libellé</label>
                        <input type="text" name="libelle" id="libelle" class="form-control" value="<?= $actualite['libelle'] ?>" required />
                    </div>
                    <div class="col">
                        <label for="date" class="form-label">Date de publication</label>
                        <input type="date" name="date" id="date" class="form-control" value="<?= $actualite['date'] ?>"  required />
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" name="description" id="description" class="form-control" value="<?= $actualite['description'] ?>" required />
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