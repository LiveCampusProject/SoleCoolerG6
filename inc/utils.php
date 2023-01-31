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
    *   Fonction permetant de voir les détails d'un produit
    */
    function voirProduit(): array{
        $reference = filter_input(INPUT_GET, "reference");
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
            echo "Produit non trouvé";
            exit();
        }
        return [
            "Voir un produit",
            "Visualisation du produit " . $leProduit["libelle"],
            $leProduit
        ];
    }

    /*
    *   Fonction permetant d'ajouter un produit
    */
    function ajouter(){
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
                $requete = $pdo->prepare("INSERT INTO produits (libelle, description, reference, price)
                VALUES (:libelle, :description, :reference, :price)");
                
                $requete->bindParam(':libelle', $description);
                $requete->bindParam(':description', $description);
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
    *   Fonction permetant de supprimer un produit
    */
    function supprimer(){
        global $pdo;

        $reference = filter_input(INPUT_GET, "reference");

        // On vérifie la méthode de la requête HTTP
        // Si c'est du GET, on affiche juste la page
        // Par contre, si c'est du POST, il y a des données, on les vérifie.
        $method = filter_input(INPUT_SERVER, "REQUEST_METHOD"); // $_SERVER["REQUEST_METHOD"]
        if ($method == "GET") {
            echo $reference;
            $requete = $pdo->prepare("DELETE FROM produits WHERE reference = :reference");
            $requete->bindParam(':reference', $reference);
            $requete->execute();
        }
    }


    /*
    *   Fonction permetant de modifier un produit
    */
    function modifier(){
        global $pdo;

        $InitialReference = filter_input(INPUT_GET, "reference");
        $libelle = filter_input(INPUT_POST, "libelle");
        $description = filter_input(INPUT_POST, "description");
        $reference = filter_input(INPUT_POST, "reference");
        $prix = filter_input(INPUT_POST, "price");
        

        // On vérifie la méthode de la requête HTTP
        // Si c'est du GET, on affiche la page avec les données du produits
        // Par contre, si c'est du POST, il y a des données, on les vérifie et les modifie.
        $method = filter_input(INPUT_SERVER, "REQUEST_METHOD"); // $_SERVER["REQUEST_METHOD"]
        if ($method == "GET") {

            $requete = $pdo->prepare("SELECT * FROM produits WHERE reference = :reference");
            $requete->bindParam(':reference', $InitialReference);
            $requete->execute();
            $produit = $requete->fetch();

            return $produit;

        } else if ($method == "POST"){
        
            $requete = $pdo->prepare("UPDATE produits
            SET libelle = :libelle, description = :description, price = :price, reference = :reference
            WHERE reference = :referenceInitial ;");
            
            $requete->bindParam(':libelle', $libelle);
            $requete->bindParam(':description', $description);
            $requete->bindParam(':referenceInitial', $InitialReference);
            $requete->bindParam(':reference', $reference);
            $requete->bindParam(':price', $prix);

            $requete->execute();
            header('Location: ../back-office/produits.php');
        }
    }
?>