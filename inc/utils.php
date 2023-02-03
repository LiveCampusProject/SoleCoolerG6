<?php
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
                $location = '../inc/images/'.$filename.'.'.$type;

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
            
            $requete = $pdo->prepare("SELECT * FROM produits WHERE reference = :reference");
            $requete->bindParam(':reference', $reference);
            $requete->execute();
            $produit = $requete->fetch();

            unlink('../inc/images/'.$produit['image']);

            $requete = $pdo->prepare("DELETE FROM produits WHERE reference = :reference");
            $requete->bindParam(':reference', $reference);
            $requete->execute();
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

            /* Nom du fichier */
            $filename = $reference;
                
            /* On récupère le type de fichier */
            $array = explode('.', $_FILES['productFile']['name']);
            $type = end($array);

            /* Emplacement du fichier */
            $location = '../inc/images/'.$filename.'.'.$type;

            move_uploaded_file($_FILES['productFile']['tmp_name'], $location);

            $location2 = $filename.'.'.$type;
            
            $requete->bindParam(':libelle', $libelle);
            $requete->bindParam(':description', $description);
            $requete->bindParam(':referenceInitial', $InitialReference);
            $requete->bindParam(':reference', $reference);
            $requete->bindParam(':image', $location2);
            $requete->bindParam(':price', $prix);

            $requete->execute();
            header('Location: ../back-office/index.php');
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
            header('Location: ../back-office/index.php');
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
            //header('Location: ../back-office/index.php');
        }
    }
?>