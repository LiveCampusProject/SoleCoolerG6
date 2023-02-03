<?php
require_once './inc/utils.php';
// On appelle la fonction d'ajout de produit
$info = ajouterUser();

?>

<?php require_once './inc/head.php'; ?>

<!-- Là c'est le contenu spécifique de la page -->
<!-- Au dessus c'est habituel, toujours pareil -->
<!-- En dessous aussi -->

<div class="container mt-3">
    <div class="row">
        <h1 class="text-center">Ajouter un utilisateur</h1>
    </div>
    
    <!-- Message d'erreur ou de succès de l'ajout -->
    <div class="col">
        <?php 
            if( isset($info) && $info == 'Nouveau produit ajouté avec succès !'){
                echo '<div class="alert alert-success" role="alert">Nouveau produit ajouté avec succès !</div>';
            }else if(isset($info) &&  $info == "Une erreur est survenue lors de l'ajout du produit"){
                echo '<div class="alert alert-danger" role="alert">Nouveau produit ajouté avec succès !</div>';
            }else { 
                echo '<div></div>';
            } 
        
        ?>
    </div>
    <div class="row">
        <form method="POST">
            <div class="row">
                <div class="col">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" name="name" id="name" class="form-control" required />
                </div>
                <div class="col">
                    <label for="mail" class="form-label">Email</label>
                    <input type="email" name="mail" id="mail" class="form-control" required />
                </div>
            </div>
            <div class="row">
                <div class="col align-items-center d-flex">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="administrateur" id="administrateur">
                        <label class="form-check-label" for="administrateur">Administrateur</label>
                    </div>
                </div>
                <div class="col">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" name="password" id="password" class="form-control" required />
                </div>
            </div>
            <div class="row mt-3">
                <div class="col text-center">
                    <input type="submit" value="Ajouter" class="btn btn-success"/>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include_once './inc/footer.php'; ?>