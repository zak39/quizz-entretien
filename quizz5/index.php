<?php

interface Origin {
    public function getOrigin(): string;
}

class Personnage implements Origin {

    private string $name;
    
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $newName): void {
        $this->name = $newName;
    }

}

$snake = new Personnage("Thrall");
print($snake->getName() . "\n");
print($snake->getOrigin() . "\n");