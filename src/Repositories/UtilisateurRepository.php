<?php

namespace src\Repositories;

use PDO;
use src\Models\Database;
use src\Models\Utilisateur;

class UtilisateurRepository
{
    private $DB;
    private $utilisateur;
    public function __construct()
    {
        $database = new Database();
        $this->DB = $database->getDB();
        $this->utilisateur = new Utilisateur();

        require_once __DIR__ . '/../../config.php';
    }


    public function login($email, $password): array
    {
        $sql = "SELECT * FROM 'GA_Utilisateur'
        WHERE 'Email' = :Email_Utilisateur AND  'Password' = :Password_Utilisateur";

        $statement = $this->DB->prepare($sql);
        $statement->execute([
            ":Email_Utilisateur" => $email,
            ":Password_Utilisateur" => $password

        ]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}
