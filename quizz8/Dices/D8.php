<?php

namespace App\Dices;

class D8 implements DiceInterface
{
    private const NUMBER_FACES = 8;
    private const NUMBER_START = 1;

    public static function roll(): int
    {
        $face = rand(self::NUMBER_START, self::NUMBER_FACES);
        return $face;
    }
}