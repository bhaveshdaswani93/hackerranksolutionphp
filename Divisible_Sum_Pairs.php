<?php

// Complete the divisibleSumPairs function below.
function divisibleSumPairs($n, $k, $ar) {

    $pair = 0;
    for($i=0;$i<$n-1;$i++){
        for($j=$i+1;$j<$n;$j++) {
            if( ($ar[$i] + $ar[$j]) %$k === 0 ) {
                $pair++;
            }
        }
    }
    return $pair;
}
