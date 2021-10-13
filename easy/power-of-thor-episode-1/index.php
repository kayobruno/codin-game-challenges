<?php

// $lightX: the X position of the light of power
// $lightY: the Y position of the light of power
// $initialTx: Thor's starting X position
// $initialTy: Thor's starting Y position
fscanf(STDIN, "%d %d %d %d", $lightX, $lightY, $initialTx, $initialTy);

while (TRUE)
{
    // $remainingTurns: The remaining amount of turns Thor can move. Do not remove this line.
    fscanf(STDIN, "%d", $remainingTurns);

    $direction = '';
    if ($initialTy < $lightY) {
        $initialTy++;
        $direction = 'S';
    }

    if ($initialTy > $lightY) {
        $initialTy--;
        $direction = 'N';
    }

    if ($initialTx < $lightX) {
        $initialTx++;
        $direction .= 'E';
    }

    if ($initialTx > $lightX) {
        $initialTx--;
        $direction .= 'W';
    }

    echo("{$direction}\n");
}