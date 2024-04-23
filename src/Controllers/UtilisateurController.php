<?php

namespace src\Controllers;


use src\Repositories\UtilisateurRepository;
use src\Services\Reponse;

class UtilisateurController
{
    private $UtilisateurRepo;
    private $ReservationRepo;

    use Reponse;

    public function __construct()
    {
        // Instanciez les 3 propriétés avec les repositories concernés.
        $this->UtilisateurRepo = new UtilisateurRepository();
    }

    public function login($email, $password)
    {

        // Ce controller est très simple
        // j'instancie le UtilisateurRepostory, pour me servir
        // de sa fonction login en lui passant l'email et le password,
        // Je retourne sa réponse
        $utilisateurRepo = new UtilisateurRepository();
        $reponse = $utilisateurRepo->login($email, $password);
        echo json_encode($reponse);
    }
}
