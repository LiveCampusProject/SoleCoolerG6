<?php
/*
 *  On définie le path de tout les fichiers nécéssaires et le titre de notre page 
 *  Puis on insère les élements redondants footer nav et header 
 */


$js = "../js/index.js";
$css = "../css/styles.css";
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
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Modifier Commandes</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default articles">
					<div class="panel-heading"style="height: 100px !important;">
                    <h1 class="text-center">Modifier une commande</h1>
					</div>
                    <div class="panel panel-default">
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<fieldset>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="produitSelect" >Produit</label>
									<div class="col-md-9">
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
								</div>							
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="userSelect">Utilisateur</label>
									<div class="col-md-9">
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
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="commandeDate">Date de la commande</label>
									<div class="col-md-9">
                                    <input type="datetime-local" name="commandeDate" id="commandeDate" class="form-control" value="<?= $commande['commandeDate'] ?>"></input>
									</div>
								</div>

                                <div class="form-group">
									<label class="col-md-2 control-label" for="quantite">Quantité</label>
									<div class="col-md-9">
                                    <input type="number" name="quantite" id="quantite" class="form-control" value="<?= $commande['quantite'] ?>"></input>
									</div>
								</div>
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
                                        <div class="col text-center">
                                            <input type="submit" value="Envoyer" class="btn btn-success"/>
                                        </div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				</div><!--End .articles-->
            </div><!--/.col-->	
		</div><!--/.row-->
	</div>	<!--/.main-->
<?php require_once("../inc/footer.php"); ?>