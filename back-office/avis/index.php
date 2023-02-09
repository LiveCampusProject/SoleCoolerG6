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
$avis = avis();
 
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
				<li class="active">Avis</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default articles">
					<div class="panel-heading">
						Avis
					</div>
                    <?php foreach($avis as $avi): ?>
					<div class="panel-body articles-container">
						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										<div class="large"><?= $avi['note'] ?></div>
										<div class="text-muted"><?= $avi['userID'] ?></div>
									</div>
									<div class="col-xs-10 col-md-10">
										<h4><?= $avi['description'] ?></h4>
										<p><a href="voir-avis.php?referenceAvis=<?= $avi['avisID'] ?>">Voir avis</a> | <a href="supprimer.php?referenceAvis=<?= $avi['avisID'] ?>">Supprimer l'avis   <i class="fa-solid fa-xmark"></i></a></p>
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