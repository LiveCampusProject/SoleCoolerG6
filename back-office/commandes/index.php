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
$commandes = commandes();
 
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
				<li class="active">Commandes</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default articles">
					<div class="panel-heading">
						Commandes
					</div>
                    <?php foreach($commandes as $commande): ?>
					<div class="panel-body articles-container">
						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
                                    <div class="large">N°<?= $commande['commandeID'] ?></div>
										<div class="text-muted">Quantité: <?= $commande['total'] ?></div>
									</div>
									<div class="col-xs-10 col-md-10">
                                        <h4>Client : <?= $commande['userId'] ?></h4>
                                        <p>Produit : <?= $commande['produitId'] ?></p>
                                        <p>Total : <?= $commande['total'] ?></p>
                                        <p>Le :<?= $commande['commandeDate'] ?></p>
                                        <p><a href="modifier.php?referenceCommande=<?= $commande['commandeID'] ?>">Modifier <i class="fa-solid fa-pencil"></i></a> | <a href="supprimer.php?referenceCommande=<?= $commande['commandeID'] ?>"> Supprimer <i class="fa-solid fa-xmark"></i></a></p>

									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div><!--End .article-->						
					</div>
                    <?php endforeach; ?>
				</div><!--End .articles-->
            </div><!--/.col-->	
		</div><!--/.row-->
	</div>	<!--/.main-->
<?php require_once("../inc/footer.php"); ?>