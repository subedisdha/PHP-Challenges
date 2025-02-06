<?php
//Write a function isPalindrome() that checks if a given string is a palindrome (same forward and backward).
function isPalindrome($str) {
    $str = strtolower(str_replace(' ', '', $str)); // convert to lowercase and remove spaces
    $length = strlen($str);

    for ($i = 0; $i < $length / 2; $i++) {
        if ($str[$i] !== $str[$length - $i - 1]) {
            return false; //not a palindrome
        }
    }
    return true; // palindrome
} 
// Test cases
echo isPalindrome("racecar") ? "Palindrome" : "Not a Palindrome";
echo "<br>";
echo isPalindrome("hello") ? "Palindrome" : "Not a Palindrome";
?>