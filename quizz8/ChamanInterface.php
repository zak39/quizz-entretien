<?php

namespace App;

interface ChamanInterface {
    public function castSpell(Personnage $personnage): bool;
    public function dommage(Personnage $personnage): string;
}