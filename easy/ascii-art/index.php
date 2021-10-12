<?php

fscanf(STDIN, "%d", $L);
fscanf(STDIN, "%d", $H);

$T = stream_get_line(STDIN, 256 + 1, "\n");

$alphabet = range('A', 'Z');
$alphabet = implode('', $alphabet) . '?';
$letters = str_split(strtoupper($T));

$ROW = [];
for ($i = 0; $i < $H; $i++) {
    $ROW[] = stream_get_line(STDIN, 1024 + 1, "\n");
}

for ($i = 0; $i < $H; $i++) {
    $word = '';
    foreach ($letters as $letter) {
        $letterPosition = strpos($alphabet, $letter);
        if (false === $letterPosition) {
            $letterPosition = strpos($alphabet, '?');
        }
        $word .= substr($ROW[$i], ($L * $letterPosition), $L);
    }

    echo("{$word}\n");
}
