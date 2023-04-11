<?php

namespace App\Characters;

use App\Dices\D8;
use App\Dices\D20;
use App\Personnage;
use App\Origins\Orc;
use App\ChamanInterface;

class Thrall extends Orc implements ChamanInterface
{
    public function __construct(string $name = "Arthas")
    {
        parent::__construct($name);
    }

    public function castSpell(Personnage $personnage): bool
    {
        $armor = $personnage->getArmor();

        $face = D20::roll();
        if ($face > $armor) {
            return true;
        }

        return false;
    }

    public function dommage(Personnage $personnage): string
    {
        $degats = D8::roll();
        $lifePoints = $personnage->getLifePoints() - $degats;
        $personnage->setLifePoints($lifePoints);
        $name = $personnage->getName();
        return $this->getName() . " a infligé $degats de dégats sur $name. Il lui reste " . $personnage->getLifePoints() .".";
    }
}