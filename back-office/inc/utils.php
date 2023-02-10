<?php

    /*
    *   Fonction utilitaire, redirige l'utilisateur et arrête PHP.
    */

    function redirection(string $url) {
        header('Location: ' . $url);
    }
    
    /*
    *   Fonction permettant de se connecter à la base de donnée.
    */
    function db_connect(): PDO {
        try {

            $utilisateur = "root";
            $motdepasse = "root";
            $hote = "localhost";
            $port = 3306;            ;
            $moteur = "mysql";
            $bdd = "solecooler";
            $pdo = new PDO("$moteur:host=$hote:$port;dbname=$bdd", $utilisateur, $motdepasse, [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            ]);
            }
            catch( PDOException $e) {
                echo "<h1> Erreur de connexion à la base de données </h1>".$e->getMessage();
            exit();
            }

            return $pdo;
    }

    $pdo = db_connect();

    /**
     * Fonction utilitaire utilisée par les autres fonctions de fichier
     * Retourne la liste des produits disponibles
     */

    function listeProduits(): array
    {
        global $pdo;

        $requete = $pdo->prepare("SELECT * FROM produits");
        $requete->execute();
        $produits = $requete->fetchAll(PDO::FETCH_ASSOC);


        return $produits;
    }

    function listeAvis(): array{
        global $pdo;

        $requete = $pdo->prepare("SELECT * FROM avis");
        $requete->execute();
        $avis = $requete->fetchAll(PDO::FETCH_ASSOC);


        return $avis;
    }

    function listeUsers(): array{
        global $pdo;

        $requete = $pdo->prepare("SELECT * FROM users");
        $requete->execute();
        $produits = $requete->fetchAll(PDO::FETCH_ASSOC);


        return $produits;
    }

    function listeCommandes(): array{
        global $pdo;

        $requete = $pdo->prepare("SELECT * FROM commandes");
        $requete->execute();
        $commandes = $requete->fetchAll(PDO::FETCH_ASSOC);


        return $commandes;
    }

    function listeActualites(): array{
        global $pdo;

        $requete = $pdo->prepare("SELECT * FROM actualites");
        $requete->execute();
        $commandes = $requete->fetchAll(PDO::FETCH_ASSOC);


        return $commandes;
    }

    function listeArticles(): array{
        global $pdo;

        $requete = $pdo->prepare("SELECT * FROM articles");
        $requete->execute();
        $articles = $requete->fetchAll(PDO::FETCH_ASSOC);


        return $articles;
    }

    /*
    *   Fonction permetant d'afficher la liste des produits
    */
    function produits(): array{
        $produits = listeProduits();
        return [
            "Liste des produits",
            "Voir la liste des produits disponibles",
            $produits
        ];
    }

    /*
    *   Fonction permetant d'afficher la liste des avis
    */
    function avis(): array{
        $avis = listeAvis();
        return $avis;
    }

    /*
    *   Fonction permetant d'afficher la liste des articles
    */
    function articles(): array{
        $articles = listeArticles();
        return $articles;
    }


    /*
    *   Fonction permetant d'afficher la liste des utilisateurs
    */
    function users(): array{
        $users = listeUsers();
        return $users;
    }

    /*
    *   Fonction permetant d'afficher la liste des commandes
    */
    function commandes(): array{
        $commandes = listeCommandes();
        return $commandes;
    }

    /*
    *   Fonction permetant d'afficher la liste des actualites
    */
    function actualites(): array{
        $actualites = listeActualites();
        return $actualites;
    }

     /*
    *   Fonction permetant de voir les détails d'un produit
    */
    function voirProduit(){
        $reference = filter_input(INPUT_GET, "referenceProduit");
        $produits = listeProduits();

        // Recherche de la référence du produit
        $leProduit = null;
        foreach ($produits as $produit) {
            if ($produit['reference'] == $reference) {
                $leProduit = $produit;
                break;
            }
        }
        if ($leProduit == null) {
            // Je n'ai pas trouvé le produit -> 404
            http_response_code(404);
            return null;
        }
        return $leProduit ;
    }

    /*
    *   Fonction permetant de voir les détails d'un produit
    */
    function voirActu(){
        $reference = filter_input(INPUT_GET, "referenceActualite");
        $actualites = listeActualites();

        // Recherche de la référence du produit
        $actu = null;
        foreach ($actualites as $actualite) {
            if ($actualite['actualiteID'] == $reference) {
                $actu = $actualite;
                break;
            }
        }
        if ($actu == null) {
            // Je n'ai pas trouvé le produit -> 404
            http_response_code(404);
            return null;
        }
        return $actu ;
    }

     /*
    *   Fonction permetant de voir les détails d'un avis
    */
    function voirAvis(){
        $reference = filter_input(INPUT_GET, "referenceAvis");
        $avis = listeAvis();
        // Recherche de la référence de l'avis
        if(isset($reference)){
            $unAvi = null;
            foreach ($avis as $avi) {
                if ($avi['avisID'] == $reference) {
                    $unAvi = $avi;
                    break;
                }
            }
            if ($unAvi == null) {
                // Je n'ai pas trouvé le produit -> 404
                http_response_code(404);
                echo "Avis non trouvé";
                exit();
            }
            return $unAvi ;
        }
    }

    /*
    *   Fonction permetant d'ajouter un produit
    */
    function ajouterProduit(){
        global $pdo;

        $libelle = filter_input(INPUT_POST, "libelle");
        $description = filter_input(INPUT_POST, "description");
        $reference = filter_input(INPUT_POST, "reference");
        $prix = filter_input(INPUT_POST, "price");

        // On vérifie la méthode de la requête HTTP
        // Si c'est du GET, on affiche juste la page
        // Par contre, si c'est du POST, il y a des données, on les vérifie.
        $method = filter_input(INPUT_SERVER, "REQUEST_METHOD"); // $_SERVER["REQUEST_METHOD"]
        if ($method == "POST") {
            try {
                $requete = $pdo->prepare("INSERT INTO produits (libelle, description, reference, price, image)
                VALUES (:libelle, :description, :reference, :price, :image)");

                /* Nom du fichier */
                $filename = $reference;
                
                /* On récupère le type de fichier */
                $array = explode('.', $_FILES['productFile']['name']);
                $type = end($array);

                /* Emplacement du fichier */
                $location = $_SERVER['DOCUMENT_ROOT'] .'/back-office/inc/images/'.$filename.'.'.$type;

                move_uploaded_file($_FILES['productFile']['tmp_name'], $location);

                $location2 = $filename.'.'.$type;
                
                $requete->bindParam(':libelle', $libelle);
                $requete->bindParam(':description', $description);
                $requete->bindParam(':image', $location2);
                $requete->bindParam(':reference', $reference);
                $requete->bindParam(':price', $prix);

                $requete->execute();

                
                return `Nouveau produit ajouté avec succès !`;
            } catch(PDOException $e) {
                return "Une erreur est survenue lors de l'ajout du produit";
            }
        }
    }

    /*
    *   Fonction permetant d'ajouter un produit
    */
    function ajouterActualite(){
        global $pdo;

        $libelle = filter_input(INPUT_POST, "libelle");
        $description = filter_input(INPUT_POST, "description");
        $date = filter_input(INPUT_POST, "date");

        // On vérifie la méthode de la requête HTTP
        // Si c'est du GET, on affiche juste la page
        // Par contre, si c'est du POST, il y a des données, on les vérifie.
        $method = filter_input(INPUT_SERVER, "REQUEST_METHOD"); // $_SERVER["REQUEST_METHOD"]
        if ($method == "POST") {
            try {
                $requete = $pdo->prepare("INSERT INTO actualites (libelle, description, date, image)
                VALUES (:libelle, :description, :date, :image)");

                /* Nom du fichier */
                /* Enlève tous les espaces */
                $libelle_clean = preg_replace('/\s*/', '', $libelle);
                $filename = strtolower($libelle_clean);
                
                /* On récupère le type de fichier */
                $array = explode('.', $_FILES['actuFile']['name']);
                $type = end($array);

                /* Emplacement du fichier */
                $location = $_SERVER['DOCUMENT_ROOT'] .'/back-office/inc/images/actualites/'.$filename.'.'.$type;

                move_uploaded_file($_FILES['actuFile']['tmp_name'], $location);

                $location2 = $filename.'.'.$type;

                
                $requete->bindParam(':libelle', $libelle);
                $requete->bindParam(':description', $description);
                $requete->bindParam(':date', $date);
                $requete->bindParam(':image', $location2);

                $requete->execute();

                
                return `Nouvelle actualité ajouté avec succès !`;
            } catch(PDOException $e) {
                return "Une erreur est survenue lors de l'ajout de l'actualité";
            }
        }
    }

    /*
    *   Fonction permetant d'ajouter un produit
    */
    function ajouterArticle(){
        global $pdo;

        $libelle = filter_input(INPUT_POST, "libelle");
        $lien = filter_input(INPUT_POST, "lien");
        $date = filter_input(INPUT_POST, "date");

        // On vérifie la méthode de la requête HTTP
        // Si c'est du GET, on affiche juste la page
        // Par contre, si c'est du POST, il y a des données, on les vérifie.
        $method = filter_input(INPUT_SERVER, "REQUEST_METHOD"); // $_SERVER["REQUEST_METHOD"]
        if ($method == "POST") {
            try {
                $requete = $pdo->prepare("INSERT INTO articles (libelle, lien, date)
                VALUES (:libelle, :lien, :date)");
                
                $requete->bindParam(':libelle', $libelle);
                $requete->bindParam(':lien', $lien);
                $requete->bindParam(':date', $date);

                $requete->execute();

                
                return `Nouvel article ajouté avec succès !`;
            } catch(PDOException $e) {
                return "Une erreur est survenue lors de l'ajout de l'article";
            }
        }
    }

    /*
    *   Fonction permetant d'ajouter un produit
    */
    function ajouterUser(){
        global $pdo;

        $nom = filter_input(INPUT_POST, "name");
        $email = filter_input(INPUT_POST, "mail");
        $isAdmin = filter_input(INPUT_POST, "administrateur");
        $password = filter_input(INPUT_POST, "password");

        // On vérifie la méthode de la requête HTTP
        // Si c'est du GET, on affiche juste la page
        // Par contre, si c'est du POST, il y a des données, on les vérifie.
        $method = filter_input(INPUT_SERVER, "REQUEST_METHOD"); // $_SERVER["REQUEST_METHOD"]
        if ($method == "POST") {
            if($isAdmin == 'on'){
                $isAdmin = 1;
            } else {
                $isAdmin = 0;
            }
            try {
                $requete = $pdo->prepare("INSERT INTO users (nom, email, isAdmin, password)
                VALUES (:nom, :email, :isAdmin, :password)");
                
                $requete->bindParam(':nom', $nom);
                $requete->bindParam(':email', $email);
                $requete->bindParam(':isAdmin', $isAdmin);
                $requete->bindParam(':password', $password);

                $requete->execute();
            return `Nouvel utilisateur ajouté avec succès !`;
            } catch(PDOException $e) {
                return "Une erreur est survenue lors de l'ajout de l'utilisateur";
            }
        }
    }


    /*
    *   Fonction permetant de supprimer un produit
    */
    function produitSupprimer(){
        global $pdo;

        $reference = filter_input(INPUT_GET, "referenceProduit");

        // On vérifie la méthode de la requête HTTP
        // Si c'est du GET, on affiche juste la page
        // Par contre, si c'est du POST, il y a des données, on les vérifie.
        $method = filter_input(INPUT_SERVER, "REQUEST_METHOD"); // $_SERVER["REQUEST_METHOD"]
        if ($method == "GET" && isset($reference)) {
            
            try {
                $requete = $pdo->prepare("SELECT * FROM produits WHERE reference = :reference");
                $requete->bindParam(':reference', $reference);
                $requete->execute();
                $produit = $requete->fetch();

                if ($produit['image']){
                    unlink('./inc/images/'.$produit['image']);
                }
                
                $requete = $pdo->prepare("DELETE FROM produits WHERE reference = :reference");
                $requete->bindParam(':reference', $reference);
                $requete->execute();
            } catch (Exception $e) {
                echo 'Une erreur au niveau de la suppression du produit. Vérifiez si elle n\'apparaît pas dans des commandes';
            }
        }
    }

    /*
    *   Fonction permetant de supprimer un avis
    */
    function avisSupprimer(){
        global $pdo;

        $reference = filter_input(INPUT_GET, "referenceAvis");

        // On vérifie la méthode de la requête HTTP
        // Si c'est du GET, on affiche juste la page
        // Par contre, si c'est du POST, il y a des données, on les vérifie.
        $method = filter_input(INPUT_SERVER, "REQUEST_METHOD"); // $_SERVER["REQUEST_METHOD"]
        if ($method == "GET" && isset($reference)) {
            echo $reference;
            $requete = $pdo->prepare("DELETE FROM avis WHERE avisID = :reference");
            $requete->bindParam(':reference', $reference);
            $requete->execute();
        }
    }

    /*
    *   Fonction permetant de supprimer un avis
    */
    function articleSupprimer(){
        global $pdo;

        $reference = filter_input(INPUT_GET, "referenceArticle");

        // On vérifie la méthode de la requête HTTP
        // Si c'est du GET, on affiche juste la page
        // Par contre, si c'est du POST, il y a des données, on les vérifie.
        $method = filter_input(INPUT_SERVER, "REQUEST_METHOD"); // $_SERVER["REQUEST_METHOD"]
        if ($method == "GET" && isset($reference)) {
            $requete = $pdo->prepare("DELETE FROM articles WHERE articleID = :reference");
            $requete->bindParam(':reference', $reference);
            $requete->execute();
        }
    }

    /*
    *   Fonction permetant de supprimer un utilisateur
    */
    function userSupprimer(){
        global $pdo;

        $reference = filter_input(INPUT_GET, "referenceUser");

        // On vérifie la méthode de la requête HTTP
        // Si c'est du GET, on affiche juste la page
        // Par contre, si c'est du POST, il y a des données, on les vérifie.
        $method = filter_input(INPUT_SERVER, "REQUEST_METHOD"); // $_SERVER["REQUEST_METHOD"]
        if ($method == "GET" && isset($reference)) {
            $requete = $pdo->prepare("DELETE FROM avis WHERE userID = :userID");
            $requete->bindParam(':userID', $reference);
            $requete->execute();
            $requete = $pdo->prepare("DELETE FROM users WHERE userID = :userID");
            $requete->bindParam(':userID', $reference);
            $requete->execute();
        }
    }

    /*
    *   Fonction permetant de supprimer un utilisateur
    */
    function commandeSupprimer(){
        global $pdo;

        $reference = filter_input(INPUT_GET, "referenceCommande");

        // On vérifie la méthode de la requête HTTP
        // Si c'est du GET, on affiche juste la page
        // Par contre, si c'est du POST, il y a des données, on les vérifie.
        $method = filter_input(INPUT_SERVER, "REQUEST_METHOD"); // $_SERVER["REQUEST_METHOD"]
        if ($method == "GET" && isset($reference)) {
            $requete = $pdo->prepare("DELETE FROM commandes WHERE commandeID = :commandeID");
            $requete->bindParam(':commandeID', $reference);
            $requete->execute();
        }
    }

    /*
    *   Fonction permetant de supprimer un utilisateur
    */
    function actuSupprimer(){
        global $pdo;

        $reference = filter_input(INPUT_GET, "referenceActualite");

        // On vérifie la méthode de la requête HTTP
        // Si c'est du GET, on affiche juste la page
        // Par contre, si c'est du POST, il y a des données, on les vérifie.
        $method = filter_input(INPUT_SERVER, "REQUEST_METHOD"); // $_SERVER["REQUEST_METHOD"]
        if ($method == "GET" && isset($reference)) {

            $requete = $pdo->prepare("SELECT * FROM actualites WHERE actualiteID = :actualiteID");
            $requete->bindParam(':actualiteID', $reference);
            $requete->execute();
            $produit = $requete->fetch();

            if ($produit['image']){
                unlink('/back-office/inc/images/actualites/'.$produit['image']);
            }

            $requete = $pdo->prepare("DELETE FROM actualites WHERE actualiteID = :actualiteID");
            $requete->bindParam(':actualiteID', $reference);
            $requete->execute();
        }
    }



    /*
    *   Fonction permetant de modifier un produit
    */
    function produitmodifier(){
        global $pdo;

        $InitialReference = filter_input(INPUT_GET, "referenceProduit");
        $libelle = filter_input(INPUT_POST, "libelle");
        $description = filter_input(INPUT_POST, "description");
        $reference = filter_input(INPUT_POST, "reference");
        $prix = filter_input(INPUT_POST, "price");
        

        // On vérifie la méthode de la requête HTTP
        // Si c'est du GET, on affiche la page avec les données du produits
        // Par contre, si c'est du POST, il y a des données, on les vérifie et les modifie.
        $method = filter_input(INPUT_SERVER, "REQUEST_METHOD"); // $_SERVER["REQUEST_METHOD"]
        if ($method == "GET") {
            if(isset($InitialReference)){
                $requete = $pdo->prepare("SELECT * FROM produits WHERE reference = :reference");
                $requete->bindParam(':reference', $InitialReference);
                $requete->execute();
                $produit = $requete->fetch();
    
                return $produit;
            }

        } else if ($method == "POST" && isset($InitialReference)) {
        
            $requete = $pdo->prepare("UPDATE produits
            SET libelle = :libelle, description = :description, price = :price, reference = :reference, image = :image
            WHERE reference = :referenceInitial ;");

            if(file_exists($_FILES['productFile']['tmp_name']) || is_uploaded_file(($_FILES['productFile']['tmp_name']))){
                /* Nom du fichier */
                $filename = $reference;
                    
                /* On récupère le type de fichier */
                $array = explode('.', $_FILES['productFile']['name']);
                $type = end($array);

                /* Emplacement du fichier */
                $location = $_SERVER['DOCUMENT_ROOT'].'/back-office/inc/images/'.$filename.'.'.$type;

                move_uploaded_file($_FILES['productFile']['tmp_name'], $location);

                $location2 = $filename.'.'.$type;
            }else{
                $requete2 = $pdo->prepare("SELECT * FROM produits WHERE reference = :reference");
                $requete2->bindParam(':reference', $InitialReference);
                $requete2->execute();
                $produit = $requete2->fetch();
                /* On remet le nom de l'image initiale */
                echo'=============>'.$produit['image'];
                $location2 = $produit['image'];
            }
            
            $requete->bindParam(':libelle', $libelle);
            $requete->bindParam(':description', $description);
            $requete->bindParam(':referenceInitial', $InitialReference);
            $requete->bindParam(':reference', $reference);
            $requete->bindParam(':image', $location2);
            $requete->bindParam(':price', $prix);

            $requete->execute();
            header('Location: ./index.php');
        }
    }

    /*
    *   Fonction permetant de modifier un utilisateur
    */
    function userModifier(){
        global $pdo;

        $InitialReference = filter_input(INPUT_GET, "referenceUser");
        $isAdmin = filter_input(INPUT_POST, "administrateur");
        

        // On vérifie la méthode de la requête HTTP
        // Si c'est du GET, on affiche la page avec les données du produits
        // Par contre, si c'est du POST, il y a des données, on les vérifie et les modifie.
        $method = filter_input(INPUT_SERVER, "REQUEST_METHOD"); // $_SERVER["REQUEST_METHOD"]
        if ($method == "GET") {
            if(isset($InitialReference) && $InitialReference != null){
                $requete = $pdo->prepare("SELECT * FROM users WHERE userID = :userID");
                $requete->bindParam(':userID', $InitialReference);
                $requete->execute();
                $user = $requete->fetch();

                return $user;
            }
            
        } else if ($method == "POST" && isset($InitialReference)){
            if($isAdmin == 'on'){
                $isAdmin = 1;
            } else {
                $isAdmin = 0;
            }

            $requete = $pdo->prepare("UPDATE users
            SET isAdmin = :isAdmin WHERE userID = :userID ;");
            
            $requete->bindParam(':isAdmin', $isAdmin);
            $requete->bindParam(':userID', $InitialReference);

            $requete->execute();
            header('Location: ./index.php');
        }
    }

    /*
    *   Fonction permetant de modifier une commande
    */
    function commandeModifier(){
        global $pdo;

        $InitialReference = filter_input(INPUT_GET, "referenceCommande");
        $produitId = filter_input(INPUT_POST, "produitSelect");
        $userId = filter_input(INPUT_POST, "userSelect");
        $commandeDate = filter_input(INPUT_POST, "commandeDate");
        $quantite = filter_input(INPUT_POST, "quantite");

        // On vérifie la méthode de la requête HTTP
        // Si c'est du GET, on affiche la page avec les données du produits
        // Par contre, si c'est du POST, il y a des données, on les vérifie et les modifie.
        $method = filter_input(INPUT_SERVER, "REQUEST_METHOD"); // $_SERVER["REQUEST_METHOD"]
        if ($method == "GET") {
            if(isset($InitialReference) && $InitialReference != null){
                $requete = $pdo->prepare("SELECT * FROM commandes WHERE commandeID = :commandeID");
                $requete->bindParam(':commandeID', $InitialReference);
                $requete->execute();
                $commande = $requete->fetch();

                return $commande;
            }
            
        } else if ($method == "POST" && isset($InitialReference)){

            // On va récupérer le prix du produit afin de calculer le prix total
            $req = $pdo->prepare("SELECT * FROM produits where produitID = :produitID");
            
            $req->bindParam(':produitID', $produitId);
            $req->execute();
            $unProduit =  $req->fetch();

            $total = $unProduit['price'] * $quantite;

            /* Update */ 
            $requete = $pdo->prepare("UPDATE commandes
            SET produitId = :produitId,userId = :userId, commandeDate = :commandeDate,quantite = :quantite, total = :total
            WHERE commandeID = :commandeID ;");
            
            $requete->bindParam(':produitId', $produitId);
            $requete->bindParam(':userId', $userId);
            $requete->bindParam(':commandeDate', $commandeDate);
            $requete->bindParam(':quantite', $quantite);
            $requete->bindParam(':total', $total);
            $requete->bindParam(':commandeID', $InitialReference);

            $requete->execute();
            header('Location: ./index.php');
        }
    }

    /*
    *   Fonction permetant de modifier une actualité
    */
    function actuModifier(){
        global $pdo;

        $InitialReference = filter_input(INPUT_GET, "referenceActualite");
        $libelle = filter_input(INPUT_POST, "libelle");
        $description = filter_input(INPUT_POST, "description");
        $date = filter_input(INPUT_POST, "date");
        

        // On vérifie la méthode de la requête HTTP
        // Si c'est du GET, on affiche la page avec les données du produits
        // Par contre, si c'est du POST, il y a des données, on les vérifie et les modifie.
        $method = filter_input(INPUT_SERVER, "REQUEST_METHOD"); // $_SERVER["REQUEST_METHOD"]
        if ($method == "GET") {
            if(isset($InitialReference)){
                $requete = $pdo->prepare("SELECT * FROM actualites WHERE actualiteID = :actualiteID");
                $requete->bindParam(':actualiteID', $InitialReference);
                $requete->execute();
                $actu = $requete->fetch();
    
                return $actu;
            }

        } else if ($method == "POST" && isset($InitialReference)) {
        
            $requete = $pdo->prepare("UPDATE actualites
            SET libelle = :libelle, description = :description, date = :date, image = :image
            WHERE actualiteID = :actualiteID ;");

            /* Nom du fichier */
            /* Enlève tous les espaces */
            $libelle_clean = preg_replace('/\s*/', '', $libelle);
            $filename = strtolower($libelle_clean);
            
            if(file_exists($_FILES['actuFile']['tmp_name']) || is_uploaded_file(($_FILES['actuFile']['tmp_name']))){
                /* On récupère le type de fichier */
                $array = explode('.', $_FILES['actuFile']['name']);
                $type = end($array);

                /* Emplacement du fichier */
                $location = $_SERVER['DOCUMENT_ROOT'] .'/back-office/inc/images/actualites/'.$filename.'.'.$type;

                move_uploaded_file($_FILES['actuFile']['tmp_name'], $location);

                $location2 = $filename.'.'.$type;
            } else {
                $requete2 = $pdo->prepare("SELECT * FROM actualites WHERE actualiteID = :actualiteID");
                $requete2->bindParam(':actualiteID', $InitialReference);
                $requete2->execute();
                $actu = $requete2->fetch();
                /* on remet le nom de l'image initiale */
                $location2 = $actu['image'];
            }

            $requete->bindParam(':libelle', $libelle);
            $requete->bindParam(':description', $description);
            $requete->bindParam(':date', $date);
            $requete->bindParam(':image', $location2);
            $requete->bindParam(':actualiteID', $InitialReference);

            $requete->execute();
            header('Location: /back-office/actualites/index.php');
        }
    }


     /*
    *   Fonction permetant de modifier une actualité
    */
    function articleModifier(){
        global $pdo;

        $InitialReference = filter_input(INPUT_GET, "referenceArticle");
        $libelle = filter_input(INPUT_POST, "libelle");
        $lien = filter_input(INPUT_POST, "lien");
        $date = filter_input(INPUT_POST, "date");
        

        // On vérifie la méthode de la requête HTTP
        // Si c'est du GET, on affiche la page avec les données du produits
        // Par contre, si c'est du POST, il y a des données, on les vérifie et les modifie.
        $method = filter_input(INPUT_SERVER, "REQUEST_METHOD"); // $_SERVER["REQUEST_METHOD"]
        if ($method == "GET") {
            if(isset($InitialReference)){
                $requete = $pdo->prepare("SELECT * FROM articles WHERE articleID = :articleID");
                $requete->bindParam(':articleID', $InitialReference);
                $requete->execute();
                $produit = $requete->fetch();
    
                return $produit;
            }

        } else if ($method == "POST" && isset($InitialReference)) {
        
            $requete = $pdo->prepare("UPDATE articles
            SET libelle = :libelle, lien = :lien, date = :date
            WHERE articleID = :articleID ;");

            
            $requete->bindParam(':libelle', $libelle);
            $requete->bindParam(':lien', $lien);
            $requete->bindParam(':date', $date);
            $requete->bindParam(':articleID', $InitialReference);

            $requete->execute();
            header('Location: ./index.php');
        }
    }


    /* Récupère un utilisateur en fonction de son ID*/
    function getUserbyID($id){
        global $pdo;

        $requete = $pdo->prepare("SELECT * FROM users WHERE userID = :userID");
        $requete->bindParam(':userID', $id);
        $requete->execute();
        $user = $requete->fetch();
        
        return $user;
    }

    /* Récupère un produit en fonction de son ID*/
    function getProduitbyID($id){
        global $pdo;

        $requete = $pdo->prepare("SELECT * FROM produits WHERE produitID = :produitID");
        $requete->bindParam(':produitID', $id);
        $requete->execute();
        $produit = $requete->fetch();
        
        return $produit;
    }

?>