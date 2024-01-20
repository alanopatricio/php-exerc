<?php

function divisors($int)
{
    for ($i = 2; $i < $int; $i++) {
        if ($int % $i == 0) {
            $return[] = $i;
        }
    }
    echo !$return ? $int . ' is prime!' : implode(',', $return) . '<br>';
}

$arr = [12, 25, 13];
foreach ($arr as $a) {
    divisors($a);
}