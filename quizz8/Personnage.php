<?php

namespace App;

use App\OriginInterface;
use Exception;

abstract class Personnage implements OriginInterface {

    private string $name;
    private string $origin;
    private int $lifePoints;
    private int $armor;

    public function __construct(string $name,
    string $origin,
    int $lifePoints,
    int $armor = 0)
    {
        if ($armor > 20) {
            throw new Exception("L'armure ne doit pas dépasser 20 points.");
        }
        
        $this->name = $name;
        $this->origin = $origin;
        $this->lifePoints = $lifePoints;        
        $this->armor = $armor;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $newName): void {
        $this->name = $newName;
    }

    public function getOrigin(): string {
        return $this->origin;
    }

    public function getLifePoints(): int
    {
        return $this->lifePoints;
    }

    public function setLifePoints(int $lifePoints): void
    {
        $this->lifePoints += $lifePoints;
    }

    public function getArmor(): int
    {
        return $this->armor;
    }
}