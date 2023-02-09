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

<main class="main">
    <div class="container">
    <h1 class="text-center">Ajouter un article</h1>

    <form method="POST" enctype="multipart/form-data" id="addArticle-form">
            <div class="input">
                <label>
                    <div>Libelle</div>
                    <input type="text" name="libelle" id="libelle" placeholder="Libelle" value="<?= $article['libelle'] ?>" required />
                </label>
            </div>
            <div class="input">
                <label>
                    <div>Date de parution</div>
                    <input type="date" name="date" id="date"  value="<?= $article['date'] ?>" required />
                </label>
            </div>
            <div class="input">
                <label>
                    <div>Lien</div>
                    <input type="link" name="lien" id="lien" placeholder="Lien" value="<?= $article['lien'] ?>" required />
                </label>
            </div>

        <div>
                <input type="submit" value="Envoyer" class="btn btn-success"/>
        </div>
    </form>

    </div>
</main>
<?php include_once '../inc/footer.php'; ?>