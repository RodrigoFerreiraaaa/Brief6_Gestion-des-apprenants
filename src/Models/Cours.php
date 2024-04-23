<?php 

namespace src\Models;

use DateTime;
use src\Services\Hydratation;

class Cours{

    private int $IdCours;
    private string $NomCours;
    private DateTime $DebutCours;
    private DateTime $FinCours;
    private int $Code;
    private int $IdPromo;

    use Hydratation;


    /**
     * Get the value of IdCours
     */
    public function getIdCours(): int
    {
        return $this->IdCours;
    }

    /**
     * Set the value of IdCours
     */
    public function setIdCours(int $IdCours): self
    {
        $this->IdCours = $IdCours;

        return $this;
    }

    /**
     * Get the value of NomCours
     */
    public function getNomCours(): string
    {
        return $this->NomCours;
    }

    /**
     * Set the value of NomCours
     */
    public function setNomCours(string $NomCours): self
    {
        $this->NomCours = $NomCours;

        return $this;
    }

    /**
     * Get the value of DebutCours
     */
    public function getDebutCours(): DateTime
    {
        return $this->DebutCours;
    }

    /**
     * Set the value of DebutCours
     */
    public function setDebutCours(DateTime $DebutCours): self
    {
        $this->DebutCours = $DebutCours;

        return $this;
    }

    /**
     * Get the value of FinCours
     */
    public function getFinCours(): DateTime
    {
        return $this->FinCours;
    }

    /**
     * Set the value of FinCours
     */
    public function setFinCours(DateTime $FinCours): self
    {
        $this->FinCours = $FinCours;

        return $this;
    }

    /**
     * Get the value of Code
     */
    public function getCode(): int
    {
        return $this->Code;
    }

    /**
     * Set the value of Code
     */
    public function setCode(int $Code): self
    {
        $this->Code = $Code;

        return $this;
    }

    /**
     * Get the value of IdPromo
     */
    public function getIdPromo(): int
    {
        return $this->IdPromo;
    }

    /**
     * Set the value of IdPromo
     */
    public function setIdPromo(int $IdPromo): self
    {
        $this->IdPromo = $IdPromo;

        return $this;
    }
}