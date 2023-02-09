<?php
    $js = "../js/index.js";
    $css = "../css/styles.css";
    $titre = "SoleCooler";
    $bodyId = "index-backoffice";
    require_once("../inc/head.php");
    require_once("../inc/header.php");
    // require_once("./inc/nav.php");
    require_once '../inc/utils.php';

    $produit = produitModifier();
?>

<?php require_once '../inc/head.php'; ?>

<!-- Là c'est le contenu spécifique de la page -->
<!-- Au dessus c'est habituel, toujours pareil -->
<!-- En dessous aussi -->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Modification produit</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default articles">
					<div class="panel-heading"style="height: 100px !important;">
                    <h1 class="text-center">Modifier un produit</h1>
					</div>
                    <div class="panel panel-default">
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<fieldset>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="reference" >Référence</label>
									<div class="col-md-9">
										<input id="reference" name="reference" type="text" value="<?= $produit['reference'] ?>" class="form-control" required>
									</div>
								</div>
							
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="libelle">Libellé</label>
									<div class="col-md-9">
										<input id="libelle" name="libelle" type="text" value="<?= $produit['libelle'] ?>" class="form-control" required>
									</div>
								</div>
								
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="price">Prix</label>
									<div class="col-md-9">
										<input type="number" class="form-control" id="price" name="price" value="<?= $produit['price'] ?>" required ></input>
									</div>
								</div>

                                <div class="form-group">
									<label class="col-md-2 control-label" for="description">Description</label>
									<div class="col-md-9">
										<textarea class="form-control" id="description" name="description" value="<?= $produit['description'] ?>" required  rows="5"></textarea>
									</div>
								</div>

                                <div class="form-group">
									<label class="col-md-2 control-label" for="productFile">Choisir un fichier</label>
									<div class="col-md-9">
										<input type="file" class="form-control" id="productFile" name="productFile"></input>
									</div>
                                    <div class="col">
                                        <img src="../inc/images/<?= $produit['reference'] ?>.png" alt="" style="height:200px">
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