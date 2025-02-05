<?php
// Create a function calculateAverage() that takes an array of numbers and returns their average.
function calculateAverage($numbers) {
    if (count($numbers) == 0) {
        return 0; // avoiding division by zero
    }

    $sum = 0;
    foreach($numbers as $num) {
        $sum += $num;
    }

    return $sum / count($numbers);
}

$nums = [10, 20, 30, 40, 50];
echo "Average: " . calculateAverage($nums);
?>