<?php
//Write a function printTable() that takes a number as input and prints 
//its multiplication table up to 10.
function printTable($num) {
    for($i = 1; $i <=10; $i++) {
        echo "$num X $i = " . ($num * $i) . "<br>";
    }
}
printTable(5);
?>