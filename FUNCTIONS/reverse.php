<?php
//Write a function reverseString() that takes a string as input and returns the reversed version of it.
function reverseStr($str) {
    $reversed = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    return $reversed;
}
echo reverseStr("hello");
?> 