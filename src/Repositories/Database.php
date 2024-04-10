<?php

namespace src\Models;

use PDO;
use PDOException;

final class Database
{

    private $DB;
    private $Config;

    public function __construct()
    {
        $this->Config = __DIR__ . '/../../config.php';
        require_once $this->Config;
        $this->ConnexionDB();
    }

    private function ConnexionDB()
    {
        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
            $this->DB = new PDO($dsn, DB_USER, DB_PWD);
        } catch (PDOException $error) {
            echo "Quelque chose s'est mal passé : " . $error->getMessage();
        }
    }

    public function getDB()
    {
        return $this->DB;
    }

    public function initializeDB(): string
    {

        // Vérifier si la base de données est vide
        if ($this->testIfTableResaExists()) {
            return "La base de données semble déjà remplie.";
            die();
        }
        // Télécharger le fichier sql d'initialisation dans la BDD
        try {
            $sql = file_get_contents(__DIR__ . "/../Migrations/mcd.sql
            ");

            $this->DB->query($sql);
            // Mettre à jour le fichier config.php

            if ($this->MiseAJourConfig()) {
                return "installation de la Base de Données terminée !";
                die();
            }
        } catch (PDOException $erreur) {
            return "impossible de remplir la Base de données : " . $erreur->getMessage();
            die();
        }
    }


    private function MiseAJourConfig(): bool
    {

        $fconfig = fopen($this->Config, 'w');

        $contenu = "<?php

        define('DB_HOST', 'localhost');
        define('DB_NAME', 'gestion-des-apprenants_brief');
        define('DB_USER', 'gestion-des-apprenants_brief');
        define('DB_PWD', 'gestion-des-apprenants_brief');
        define('PREFIXE', 'GA_');
        define('HOME_URL', '/');


        define('DB_INITIALIZED', TRUE);";


        if (fwrite($fconfig, $contenu)) {
            fclose($fconfig);
            return true;
        } else {
            fclose($fconfig);
            return false;
        }
    }
}
