<?php

use App\Characters\Arthas;
use App\Characters\Thrall;

require __DIR__ . '/vendor/autoload.php';

$arthas = new Arthas("Arthas");
$thrall = new Thrall("Thrall");

print($arthas->getLifePoints() . "\n");
print($thrall->getLifePoints() . "\n");

$canAttack = $arthas->attackHammerOn($thrall);
if ($canAttack) {
    $message = $arthas->dommage($thrall);
    print("$message\n");
}

$canAttack = $thrall->castSpell($arthas);
if ($canAttack) {
    $message = $thrall->dommage($arthas);
    print("$message\n");
}

