<?php

function my_strrev(string $str)
{
    $len = strlen($str);
    $result = "";

    for ($i = $len - 1; $i >= 0; $i--) {
        $result .= $str[$i];
    }

    return $result;
}


echo my_strrev("Bonjour"); 
