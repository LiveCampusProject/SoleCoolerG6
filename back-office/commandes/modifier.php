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
        <h1 class="text-center">Modifier</h1>
        <form method="POST" id="addCommandes-form">
            <div class="input">
                <label>
                    <div>Produit</div>
                    <select name="produitSelect" id="produitSelect" class="form-select">
                        <?php foreach($produits as $produitCommande){ ?>
                            <?php if($produitCommande['produitID'] == $commande['produitId']){ ?>
                                <option value="<?= $produitCommande['produitID'] ?>" selected><?= $produitCommande['libelle'] ?></option>
                            <?php }else{ ?>
                                <option value="<?= $produitCommande['produitID'] ?>"><?= $produitCommande['libelle'] ?></option>
                            <?php } ?>
                            
                        <?php } ?>
                    </select>
                </label>
            </div>
            <div class="input">
                <label>
                    <div>Utilisateur</div>
                    <select name="userSelect" id="userSelect" class="form-select">
                        <?php foreach($users as $userCommande){ ?>
                            <?php if($userCommande['userID'] == $commande['userId']){ ?>
                                <option value="<?= $userCommande['userID'] ?>" selected><?= $userCommande['nom'] ?></option>
                            <?php }else{ ?>
                                <option value="<?= $userCommande['userID'] ?>"><?= $userCommande['nom'] ?></option>
                            <?php } ?>
                            
                        <?php } ?>
                    </select>
                </label>
            </div>
            <div class="input">
                <label>
                    <div>Date de la commande</div>
                    <input type="datetime-local" name="commandeDate" id="commandeDate" value="<?= $commande['commandeDate'] ?>">
                </label>
            </div>
            <div class="input">
                <label>
                    <div>Quantité</div>
                    <input type="number" name="quantite" id="quantite" value="<?= $commande['quantite'] ?>">
                </label>
            </div>
            <div>
                <input type="submit" value="Envoyer"/>
            </div>
        </form>                       
    </div>
    <!-- Tabs navs -->
</main>
<?php require_once("../inc/footer.php"); ?>