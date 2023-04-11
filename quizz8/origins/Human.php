<?php

namespace App\Origins;

use App\Personnage;

abstract class Human extends Personnage {

    protected const ORIGIN = 'Human';
    
    public function __construct(string $name)
    {
        parent::__construct($name, self::ORIGIN, 100, 12);
    }
}