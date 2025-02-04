<?php
//Create a function factorial() that takes a number as input and returns its factorial.
function factorial($num) {
    if ($num < 0) {
        return "Factorial is not defined for negative number.";
    }
    $fact = 1;
    for ($i = 1; $i <= $num; $i++) {
        $fact *= $i;
    }
    return $fact;
}
echo "Factorial of 5 is: " . factorial(5);

?>