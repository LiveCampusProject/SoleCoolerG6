<?php
    $js = "../js/index.js";
    $css = "../css/main.css";
    $titre = "SoleCooler";
    $bodyId = "index-backoffice";
    require_once("../inc/head.php");
    require_once("../inc/header.php");
    // require_once("./inc/nav.php");
    require_once '../inc/utils.php';

    $article = articleModifier();
?>

<?php require_once '../inc/head.php'; ?>

<!-- Là c'est le contenu spécifique de la page -->
<!-- Au dessus c'est habituel, toujours pareil -->
<!-- En dessous aussi -->
    <div class="container mt-3">
        <div class="row">
            <h1 class="text-center">Modifier un article</h1>
        </div>
        
        <div class="row">
            <form method="POST">
                <div class="row">
                    <div class="col">
                        <label for="libelle" class="form-label">Libellé</label>
                        <input type="text" name="libelle" id="libelle" class="form-control" value="<?= $article['libelle'] ?>" required />
                    </div>
                    <div class="col">
                        <label for="date" class="form-label">Date de parution</label>
                        <input type="date" name="date" id="date" class="form-control" value="<?= $article['date'] ?>"  required />
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="lien" class="form-label">Lien</label>
                        <input type="link" name="lien" id="lien" class="form-control" value="<?= $article['lien'] ?>" required/>
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