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
require_once '../inc/utils.php';

$user = userModifier();
 
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
				<li class="active">Modifier Utilisateur</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default articles">
					<div class="panel-heading"style="height: 100px !important;">
                    <h1 class="text-center">Modifier l'utilisateur</h1>
					</div>
                    <div class="panel panel-default">
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<fieldset>
								
								<div class="form-group">
									<label class="col-md-3 control-label" for="nom" >Nom</label>
									<div class="col-md-9">
                                        <h4 name="nom"><?= $user['nom'] ?></h4>
									</div>
								</div>			
                                <div class="form-group">
									<label class="col-md-3 control-label" for="email" >Email</label>
									<div class="col-md-9">
                                        <h4 name="email"><?= $user['email'] ?></h4>
									</div>
								</div>	
                                <div class="form-group">
									<label class="col-md-3 control-label" for="registerdate" >Date d'enregistrement</label>
									<div class="col-md-9">
                                        <h4 name="registerdate"><?= $user['registerDate'] ?></h4>
									</div>
								</div>						
								
								<div class="form-group">
									<label class="col-md-3 control-label" for="admin">Admininstrateur</label>
									<div class="col-md-9">
                                        <div class="form-check card-link">
                                            <?php if($user['isAdmin'] == 1){?>
                                                <input class="form-check-input" type="checkbox" name="admin" id="administrateur" checked>
                                            <?php } else { ?>
                                                <input class="form-check-input" type="checkbox" name="admin" id="administrateur">
                                            <?php } ?>
                                        </div>
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