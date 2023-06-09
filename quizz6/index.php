<?php

interface Origin {
    public function getOrigin(): string;
}

abstract class Personnage implements Origin {

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

    public function getOrigin(): string {
        return "Human";
    }
}

$arthas = new Personnage("Arthas");
print($arthas->getName() . "\n");
print($arthas->getOrigin() . "\n");