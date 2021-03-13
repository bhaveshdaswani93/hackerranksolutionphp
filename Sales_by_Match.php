<?php

// Complete the sockMerchant function below.
function sockMerchant($n, $ar) {

    if($n == 1) {
        return 0;
    }
    
    usort($ar,function($a,$b){
       return $a <=> $b; 
    });
    
    $init = $ar[0];
    $set = 1;
    $pair = 0;
    
    for($i=1;$i<$n;$i++) {
        if($ar[$i] === $ar[$i -1]){
            $set++;
        } else {
            $p = floor($set/2);
            $pair += $p;
            $set = 1;
        }
    }
    
    if($set > 1) {
         $p = floor($set/2);
            $pair += $p;
    }
    return $pair;
    
}
