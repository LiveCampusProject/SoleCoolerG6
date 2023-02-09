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
ajouterUser();

$info = ajouterUser();
 
?>

<!-- Là c'est le contenu spécifique de la page -->
<!-- Au dessus c'est habituel, toujours pareil -->
    <!-- Message d'erreur ou de succès de l'ajout -->
	<?php 
            if( isset($info) && $info == 'Nouvel utilisateur ajouté avec succès !'){
                echo '<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Nouvel Utilisateur ajouté <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';
            }else if(isset($info) &&  $info == "Une erreur est survenue lors de l'ajout du produit"){
                echo '<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Echec de l\'ajout <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';
            }else { 
                echo '<div></div>';
            } 
        
        ?>

<!-- En dessous aussi -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Ajout Utilisateur</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default articles">
					<div class="panel-heading"style="height: 100px !important;">
                    <h1 class="text-center">Ajouter un utilisateur</h1>
					</div>
                    <div class="panel panel-default">
					<div class="panel-body">
						<form class="form-horizontal" action="" method="POST">
							<fieldset>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="nom" >Nom</label>
									<div class="col-md-9">
                                    <input type="text" name="name" id="name" class="form-control" required />
									</div>
								</div>			
                                <div class="form-group">
									<label class="col-md-2 control-label" for="email" >Email</label>
									<div class="col-md-9">
                                        <input type="email" name="mail" id="mail" class="form-control" required />
									</div>
								</div>					
	

                                <div class="form-group">
									<label class="col-md-2 control-label" for="password">Mot de passe</label>
									<div class="col-md-9">
                                        <input type="password" name="password" id="password" class="form-control" required />
                                    </div>
                                </div>							
																
								<div class="form-group">
									<label class="col-md-2 control-label" for="admin">Admininstrateur</label>
									<div class="col-md-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="administrateur" id="administrateur">
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