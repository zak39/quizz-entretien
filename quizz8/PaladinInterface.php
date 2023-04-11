<?php

namespace App;

interface PaladinInterface {
    public function attackHammerOn(Personnage $personnage): bool;
    public function dommage(Personnage $personnage): string;
}