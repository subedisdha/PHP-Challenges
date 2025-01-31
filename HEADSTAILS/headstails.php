<?php

$heads = 1;
$tails = 1;
for($i = 1; $i <= 100; $i++) {
    $randNum = rand(1,2);
        echo $randNum;
        if($randNum == 1) {
            $heads++;
            echo "Heads, I win! </br>";
        }else {
            $tails++;
            echo "Tails, You win! </br>";
        }
}

echo "There were {$heads} heads and {$tails} tails. ";

if($heads > $tails) {
    echo "Heads surpasses tails so, I win! </br>";
}elseif($tails > $heads) {
    echo "Tails surpasses heads so, You win! </br>";
}else {
    echo "DRAW";
}

?>