<?php
//Write a function countVowels() that takes a string and returns the number of vowels (a, e, i, o, u) in it.
function countVowels($str) {
    $vowels = ['a','e','i','o','u','A','E','I','O','U'];
    $count = 0;
    
    for ($i = 0; $i < strlen($str); $i++) {
        if(in_array($str[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}
echo "Number of vowels: ", countVowels("Hello sdha");
?>