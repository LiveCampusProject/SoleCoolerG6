<?php
    require_once '../inc/utils.php';
    // On appelle la fonction d'ajout de produit
    $users = users();
    [$var1, $var2 , $produits] = produits();
    $produit = produitModifier();
    $user = userModifier();
    $commande = commandeModifier();
?>

<?php require_once '../inc/head.php'; ?>

<!-- Là c'est le contenu spécifique de la page -->
<!-- Au dessus c'est habituel, toujours pareil -->
<!-- En dessous aussi -->
<?php if(isset($produit) && $produit != null){ ?>
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

<?php }else if(isset($user) && $user != null){ ?>
    <div class="container mt-3">
        <div class="row">
            <h1 class="text-center">Modifier un utilisateur</h1>
        </div>

        <div class="row">
            <form method="POST">
                <div class="row">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $user['nom'] ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?= $user['email'] ?></h6>
                            <p class="card-text"><?= $user['registerDate'] ?></p>
                            <div class="form-check card-link">
                                <?php if($user['isAdmin'] == 1){?>
                                    <input class="form-check-input" type="checkbox" name="administrateur" id="administrateur" checked>
                                <?php } else { ?>
                                    <input class="form-check-input" type="checkbox" name="administrateur" id="administrateur">
                                <?php } ?>
                                <label class="form-check-label" for="administrateur">Administrateur</label>
                            </div>
                        </div>
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
<?php }else if(isset($commande) && $commande != null){ ?>
    <div class="container mt-3">
        <div class="row">
            <h1 class="text-center">Modifier une commande</h1>
        </div>

        <div class="row">
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
<?php } ?>
<?php include_once '../inc/footer.php'; ?>