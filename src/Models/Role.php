<?php

namespace src\Models;

use src\Services\Hydratation;

class Role
{

    private int $IdRole;
    private string $NomRole;

    use Hydratation;

    /**
     * Get the value of IdRole
     */
    public function getIdRole(): int
    {
        return $this->IdRole;
    }

    /**
     * Set the value of IdRole
     */
    public function setIdRole(int $IdRole): self
    {
        $this->IdRole = $IdRole;

        return $this;
    }

    /**
     * Get the value of NomRole
     */
    public function getNomRole(): string
    {
        return $this->NomRole;
    }

    /**
     * Set the value of NomRole
     */
    public function setNomRole(string $NomRole): self
    {
        $this->NomRole = $NomRole;

        return $this;
    }
}
