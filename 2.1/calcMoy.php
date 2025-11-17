<?php

function calcMoy(array $nombres)
{
    if (count($nombres) === 0) {
        return 0;
    }

    $somme = 0;

    foreach ($nombres as $n) {
        $somme += $n;
    }

    return $somme / count($nombres);
}

$tab = [10, 12, 14];
echo calcMoy($tab); 