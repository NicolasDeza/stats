<?php

namespace Nico\Stats\Functions;



class Variance
{
    public static function calculate(array $numbers): float
{
    $count = count($numbers);

    if ($count === 0) {
        throw new \InvalidArgumentException("La liste ne peut pas être vide");
    }

    // Calculer la moyenne manuellement
    $average = array_sum($numbers) / $count;

    // Calculer les différences au carré
    $squareDiffs = array_map(function ($number) use ($average) {
        return ($number - $average) ** 2;
    }, $numbers);

    // Calculer la variance
    $variance = array_sum($squareDiffs) / $count;

    return $variance;
}
}