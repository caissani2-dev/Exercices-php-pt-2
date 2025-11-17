<?php

function my_str_contains(string $haystack, string $needle)
{
    $lenHay = strlen($haystack);
    $lenNeedle = strlen($needle);

    
    if ($lenNeedle === 0) {
        return true;
    }

    for ($i = 0; $i < $lenHay; $i++) {

        
        if (($i + $lenNeedle) > $lenHay) {
            return false;
        }

        
        $found = true;

        for ($j = 0; $j < $lenNeedle; $j++) {
            if (!isset($haystack[$i + $j]) || $haystack[$i + $j] !== $needle[$j]) {
                $found = false;
                break;
            }
        }

        if ($found) {
            return true;
        }
    }

    return false;
}


var_dump(my_str_contains("Hello world", "world")); 
var_dump(my_str_contains("Hello world", "abc"));   
