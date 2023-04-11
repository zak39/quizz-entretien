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

$thrall = new Personnage("Thrall");
print($thrall->getName() . "\n");
print($thrall->getOrigin() . "\n");