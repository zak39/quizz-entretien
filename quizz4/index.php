<?php

class Personnage {

    private string $name;
    
    public function __construct()
    {

    }

    public function getName(): string {

    }

    public function setName(string $newName): void {

    }
}

$snake = new Personnage("Solid Snake");
print($snake->getName() . "\n");
$snake->setName('David');
print($snake->getName() . "\n");