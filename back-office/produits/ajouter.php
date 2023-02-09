<?php
$js = "";
$css = "../css/styles.css";
$titre = "SoleCooler";
$bodyId = "index-backoffice";
require_once("../inc/head.php");
require_once("../inc/header.php");
// require_once("./inc/nav.php");
require_once("../inc/footer.php");
require_once '../inc/utils.php';
ajouterProduit();
?>

<?php require_once '../inc/head.php'; ?>

<!-- Là c'est le contenu spécifique de la page -->
<!-- Au dessus c'est habituel, toujours pareil -->
<!-- En dessous aussi -->

    <!-- Message d'erreur ou de succès de l'ajout -->
        <?php 
            if( isset($info) && $info == 'Nouveau produit ajouté avec succès !'){
                echo '<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Nouveau produit ajouté <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';
            }else if(isset($info) &&  $info == "Une erreur est survenue lors de l'ajout du produit"){
                echo '<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Echec de l\'ajout <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';
            }else { 
                echo '<div></div>';
            } 
        
        ?>


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Ajout produit</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default articles">
					<div class="panel-heading"style="height: 100px !important;">
                    <h1 class="text-center">Ajouter un produit</h1>
					</div>
                    <div class="panel panel-default">
					<div class="panel-body">
						<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
							<fieldset>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="reference" >Référence</label>
									<div class="col-md-9">
                                    <input type="text" name="reference" id="reference" class="form-control" required />
									</div>
								</div>			
                                <div class="form-group">
									<label class="col-md-2 control-label" for="libelle" >Libellé</label>
									<div class="col-md-9">
                                        <input type="text" name="libelle" id="libelle" class="form-control" required />
									</div>
								</div>					
	

                                <div class="form-group">
									<label class="col-md-2 control-label" for="description">Description</label>
									<div class="col-md-9">
                                        <input type="text" name="description" id="description" class="form-control" required />
                                    </div>
                                </div>		
                                
                                
                                <div class="form-group">
									<label class="col-md-2 control-label" for="price">Prix</label>
									<div class="col-md-9">
                                        <input type="number" name="price" id="price" class="form-control" required />
                                    </div>
                                </div>	

                                <div class="form-group">
									<label class="col-md-2 control-label" for="productFile">Choisir un fichier</label>
									<div class="col-md-9">
                                        <input type="file" name="productFile" id="productFile" class="form-control" required />
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
<?php include_once '../inc/footer.php'; ?>