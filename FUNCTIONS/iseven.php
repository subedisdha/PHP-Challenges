<?php
//Write a function isEven() that takes a number as argument and returns true 
//if the number is even, otherwise false.

function isEven($num) {
    if($num % 2 == 0) {
        return true;
    }else {
        return false;
    }
}
var_dump(isEven(4));
var_dump(isEven(5));

?>