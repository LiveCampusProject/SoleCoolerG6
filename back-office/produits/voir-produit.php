<?php
$js = "../js/index.js";
$css = "../css/styles.css";
$titre = "SoleCooler";
$bodyId = "index-backoffice";
require_once("../inc/head.php");
require_once("../inc/header.php");
require_once '../inc/utils.php';
// On appelle voirProduit qui renverra le produit recherché
$produit = voirProduit();
?>

<!-- On voit le produit ici -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Voir les produits</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default articles">
					<div class="panel-heading">
						Produit
					</div>
					<div class="panel-body articles-container">
						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										<img class="large" width="60px" height="60px" alt="image produit"> <?= $produit['image'] ?></img>
										<div class="text-muted"><?= $produit['price'] ?> €</div>
									</div>
									<div class="col-xs-10 col-md-10">
										<h4><?= $produit['libelle'] ?> (<?= $produit['reference'] ?>)</h4>
                                        <p><?= $produit['description'] ?></p>
										<p><a href="modifier.php?referenceProduit=<?= $produit['reference'] ?>"> Modifier <i class="fa-solid fa-pencil"></i></a> | <a href="supprimer.php?referenceProduit=<?= $produit['reference'] ?>"> Supprimer <i class="fa-solid fa-xmark"></i></a></p>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div><!--End .article-->						
					</div>
				</div><!--End .articles-->
            </div><!--/.col-->	
		</div><!--/.row-->
	</div>	<!--/.main-->

<?php include_once '../inc/footer.php'; ?>