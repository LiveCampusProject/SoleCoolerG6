<?php
/*
 *  On définie le path de tout les fichiers nécéssaires et le titre de notre page 
 *  Puis on insère les élements redondants footer nav et header 
 */


$js = "../js/index.js";
$css = "../css/main.css";
$titre = "SoleCooler";
$bodyId = "index-backoffice";
require_once("../inc/head.php");
require_once("../inc/header.php");
// require_once("./inc/nav.php");
require_once '../inc/utils.php';

// On appelle avis() qui renverra la liste des avis
$users = users();
[$var1, $var2 , $produits] = produits();
$commande = commandeModifier();
 
?>

<!-- Là c'est le contenu spécifique de la page -->
<!-- Au dessus c'est habituel, toujours pareil -->

<!-- En dessous aussi -->
<main class="main">
    <div class="container">
        

        <div class="content">
            <form method="POST">
                <div class="row">
                    <div class="col">
                        <label for="produitSelect" class="form-label">Produit</label>
                        <select name="produitSelect" id="produitSelect" class="form-select">
                            <?php foreach($produits as $produitCommande){ ?>
                                <?php if($produitCommande['produitID'] == $commande['produitId']){ ?>
                                    <option value="<?= $produitCommande['produitID'] ?>" selected><?= $produitCommande['libelle'] ?></option>
                                <?php }else{ ?>
                                    <option value="<?= $produitCommande['produitID'] ?>"><?= $produitCommande['libelle'] ?></option>
                                <?php } ?>
                                
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col">
                        <label for="userSelect" class="form-label">Utilisateur</label>
                        <select name="userSelect" id="userSelect" class="form-select">
                            <?php foreach($users as $userCommande){ ?>
                                <?php if($userCommande['userID'] == $commande['userId']){ ?>
                                    <option value="<?= $userCommande['userID'] ?>" selected><?= $userCommande['nom'] ?></option>
                                <?php }else{ ?>
                                    <option value="<?= $userCommande['userID'] ?>"><?= $userCommande['nom'] ?></option>
                                <?php } ?>
                                
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <label for="commandeDate" class="form-label">Date de la commande</label>
                    <input type="datetime-local" name="commandeDate" id="commandeDate" class="form-control" value="<?= $commande['commandeDate'] ?>">
                    </div>
                    <div class="col">
                        <label for="quantite" class="form-label">Quantité</label>
                        <input type="number" name="quantite" id="quantite" class="form-control" value="<?= $commande['quantite'] ?>">
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
    <!-- Tabs navs -->
</main>
<?php require_once("../inc/footer.php"); ?>