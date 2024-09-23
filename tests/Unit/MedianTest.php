<?php

use Nico\Stats\Functions\Median;

test("Calcul de la médiane d'une liste paire", function () {
    $list = [0, 2, 4, 6, 8, 10];

    $result = Median::calculate($list);

    expect($result)->toBe(5.0);
});

test("Calcul de la médiane d'une liste impaire", function () {
    $list = [1, 3, 9];

    $result = Median::calculate($list);

    expect($result)->toBe(3.0);
});