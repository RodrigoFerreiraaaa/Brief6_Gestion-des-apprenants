<?php

namespace src\Models;

use src\Services\Hydratation;

class Utilisateur
{

    private int $IdUtilisateur;
    private string $Nom;
    private string $Prenom;
    private string $Email;
    private string $MotDePasse;
    private bool $CompteActif;

    use Hydratation;

    /**
     * Get the value of IdUtilisateur
     */
    public function getIdUtilisateur(): int
    {
        return $this->IdUtilisateur;
    }

    /**
     * Set the value of IdUtilisateur
     */
    public function setIdUtilisateur(int $IdUtilisateur): self
    {
        $this->IdUtilisateur = $IdUtilisateur;

        return $this;
    }

    /**
     * Get the value of Nom
     */
    public function getNom(): string
    {
        return $this->Nom;
    }

    /**
     * Set the value of Nom
     */
    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    /**
     * Get the value of Prenom
     */
    public function getPrenom(): string
    {
        return $this->Prenom;
    }

    /**
     * Set the value of Prenom
     */
    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    /**
     * Get the value of Email
     */
    public function getEmail(): string
    {
        return $this->Email;
    }

    /**
     * Set the value of Email
     */
    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * Get the value of MotDePasse
     */
    public function getMotDePasse(): string
    {
        return $this->MotDePasse;
    }

    /**
     * Set the value of MotDePasse
     */
    public function setMotDePasse(string $MotDePasse): self
    {
        $this->MotDePasse = $MotDePasse;

        return $this;
    }

    /**
     * Get the value of CompteActif
     */
    public function isCompteActif(): bool
    {
        return $this->CompteActif;
    }

    /**
     * Set the value of CompteActif
     */
    public function setCompteActif(bool $CompteActif): self
    {
        $this->CompteActif = $CompteActif;

        return $this;
    }
}