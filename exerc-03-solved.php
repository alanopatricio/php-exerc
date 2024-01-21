<?php

$phrases = [
    'The quick brown fox jumps over the lazy dog',
    '1L%r+f4G!e7w V z q6M h4d F3b+t O2n e K^g+c#S^i4i X7c-u P5d7j Y6a(a B")',
    'A pangram is a sentence that contains every single letter of the alphabet at least once',
    '5B!e i J x*p F h d!A:o q D y n6L%u9i.G9f2g4C a h+K!m+z:R t!j:B w s C'
];

function detect_pangram($string)
{
    $letters = [];
    foreach (range('a', 'z') as $letter) {
        if (is_numeric(strpos(strtolower($string), $letter)) && !in_array($letter, $letters)) {
            $letters[] = $letter;
        }
    }
    echo count($letters) == 26 ? 'true' : 'false';
    echo "<br>";
}

foreach ($phrases as $ph) {
    detect_pangram($ph);
}
