<?php

namespace Nico\Stats\Functions;

class Median
{
    public static function calculate(array $numbers): float
    {
        // Trier le tableau des nombres
        sort($numbers);
        
        $count = count($numbers);
        $middleIndex = floor($count / 2);

        // Si le nombre d'éléments est impair, retourner le nombre du milieu
        if ($count % 2 !== 0) {
            return $numbers[$middleIndex];
        }

        // Si le nombre d'éléments est pair, retourner la moyenne des deux éléments du milieu
        return ($numbers[$middleIndex - 1] + $numbers[$middleIndex]) / 2;
    }
}