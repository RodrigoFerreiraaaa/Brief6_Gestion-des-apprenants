<?php

namespace src\Models;

use DateTime;
use src\Services\Hydratation;

class Promo
{

    private int $IdPromo;
    private string $NomPromo;
    private DateTime $DateDebut;
    private DateTime $DateFin;
    private int $NombreApprenants;

    use Hydratation;

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

    /**
     * Get the value of NomPromo
     */
    public function getNomPromo(): string
    {
        return $this->NomPromo;
    }

    /**
     * Set the value of NomPromo
     */
    public function setNomPromo(string $NomPromo): self
    {
        $this->NomPromo = $NomPromo;

        return $this;
    }

    /**
     * Get the value of DateDebut
     */
    public function getDateDebut(): DateTime
    {
        return $this->DateDebut;
    }

    /**
     * Set the value of DateDebut
     */
    public function setDateDebut(DateTime $DateDebut): self
    {
        $this->DateDebut = $DateDebut;

        return $this;
    }

    /**
     * Get the value of DateFin
     */
    public function getDateFin(): DateTime
    {
        return $this->DateFin;
    }

    /**
     * Set the value of DateFin
     */
    public function setDateFin(DateTime $DateFin): self
    {
        $this->DateFin = $DateFin;

        return $this;
    }

    /**
     * Get the value of NombreApprenants
     */
    public function getNombreApprenants(): int
    {
        return $this->NombreApprenants;
    }

    /**
     * Set the value of NombreApprenants
     */
    public function setNombreApprenants(int $NombreApprenants): self
    {
        $this->NombreApprenants = $NombreApprenants;

        return $this;
    }
}
