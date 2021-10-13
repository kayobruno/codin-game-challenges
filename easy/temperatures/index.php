<?php

fscanf(STDIN, "%d", $n);
$inputs = explode(" ", fgets(STDIN));

$positives = [];
$negatives = [];
$result =  0;

if (!is_numeric($inputs[0])) {
    echo("{$result}\n");
}

for ($i = 0; $i < $n; $i++)
{
    $t = intval($inputs[$i]);
    if ($t > 0) {
        $positives[] = $t;
    } else {
        $negatives[] = $t;
    }
}

$maxNegatives = max($negatives);
$minPositives = min($positives);

if (false === $maxNegatives) {
    $result = $minPositives;
}

if (false === $minPositives) {
    $result = $maxNegatives;
}

if (false !== $maxNegatives && false !== $minPositives) {
    if (abs($maxNegatives) ===  abs($minPositives)) {
        $result = $minPositives;
    } else {
        $result = min(abs($maxNegatives), abs($minPositives));
    }
}

echo("{$result}\n");