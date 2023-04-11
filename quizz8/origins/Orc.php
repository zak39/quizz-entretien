<?php

namespace App\Origins;

use App\Personnage;

abstract class Orc extends Personnage {

    protected const ORIGIN = 'Orc';
    
    public function __construct(string $name)
    {
        parent::__construct($name, self::ORIGIN, 180, 15);
    }
}