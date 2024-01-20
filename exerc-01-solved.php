<?php

$string_origin = "This website is for losers LOL!";
$string_final = "Ths wbst s fr lsrs LL!";
$characters = str_split($string_origin);
$vowels = ['a', 'e', 'i', 'o', 'u'];

foreach($characters as $char){
    $compare = strtolower($char);
    if(!in_array($compare, $vowels)){
        $retorno .= $char;
    }
}

echo $retorno == $string_final ? 'Passed' : 'Failed';
