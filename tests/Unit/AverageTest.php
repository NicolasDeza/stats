<?php


use Nico\Stats\Functions\Average;

test("Calcul la moyenne d'une liste", function () {
    $list = [0,2,4,6,8,10];

    $result = Average::calculate($list);

    expect($result)->toBe(5.0);

});

