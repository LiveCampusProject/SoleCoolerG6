<?php
    /*
    *   Fonction permettant de se connecter à la base de donnée.
    */

    function db_connect(): PDO {
        try {

            $utilisateur = "root";
            $motdepasse = "root";
            $hote = "localhost";
            $port = 8889;            ;
            $moteur = "mysql";
            $bdd = "livecampus";
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
?>