<?php

while (TRUE) {
    $mountains = [];
    for ($i = 0; $i < 8; $i++) {
        fscanf(STDIN, "%d", $mountainH);
        $mountains[$i] = $mountainH;
    }

    asort($mountains);
    $arr = array_flip($mountains);
    $max = end($arr);

    echo("{$max}\n");
}