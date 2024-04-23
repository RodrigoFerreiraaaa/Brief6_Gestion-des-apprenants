<?php

namespace src\Models;

use PDO;
use PDOException;

final class Database
{
    private $DB;
    private $config;

    public function __construct()
    {
        $this->config = __DIR__ . '/../../config.php';
        require_once $this->config;

        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
            $this->DB = new PDO($dsn, DB_USER, DB_PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (PDOException $error) {
            echo "Erreur de connexion à la Base de Données : " . $error->getMessage();
        }
    }

    /**
     * Retourne la connexion BDD établie et l'objet PDO associé.
     */
    public function getDB(): PDO
    {
        return $this->DB;
    }

    /**
     * Initialisation de la Base de Données : installation des tables et mise à jour du fichier config.php
     * @return string message d'échec ou de réussite.
     */
    public function initialisationBDD(): string
    {

        // Vérifier si la base de données est vide
        // if ($this->testIfTableUtilisateurExists()) {
        //     return "La base de données semble déjà remplie.";
        //     die();
        // } else {
            // Télécharger le(s) fichier(s) sql d'initialisation dans la BDD
            // Et effectuer les différentes migrations
            try {

                $migration = __DIR__ . "/../../MCD.sql";
                if (file_exists($migration)) {
                    $sql = file_get_contents($migration);
                    $this->DB->query($sql);
                } else {
                    $migrationExistante = FALSE;
                }


                // Mettre à jour le fichier config.php
                if ($this->UpdateConfig()) {
                    return "installation de la Base de Données terminée !";
                }
            } catch (PDOException $erreur) {
                return "impossible de remplir la Base de données 2 : " . $erreur->getMessage();
            }
        }
    // }


    private function UpdateConfig(): bool
    {

        $fconfig = fopen($this->config, 'w');

        $contenu = "<?php

        define('DB_HOST', 'localhost');
        define('DB_NAME', 'gestion-des-apprenants_brief');
        define('DB_Utilisateur', 'gestion-des-apprenants_brief');
        define('DB_PWD', 'gestion-des-apprenants_brief');
        define('PREFIXE', 'GA_');


        define('HOME_URL', '/');


        define('DB_INITIALIZED', TRUE);
        ";


        if (fwrite($fconfig, $contenu)) {
            fclose($fconfig);
            return true;
        } else {
            return false;
        }
    }
}
