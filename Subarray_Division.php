<?php

function birthday($s, $d, $m) {

    $count = count($s);
    
    if($m > $count) {
        return 0;
    }

    $prefix = [$s[0]];
    
    if($count > 1) {
        for($i=1;$i<$count;$i++){
            $prefix[$i] = $s[$i] + $prefix[$i-1];
        }    
    }
    $ans=0;
     
    for($i=0;$i<$count - ($m-1);$i++){
        $start=$i;
        $end = $i+($m-1);
        $sum = null;
        if($i === 0) {
            $sum = $prefix[$end];
        } else {
            $sum = $prefix[$end] - $prefix[$start-1];
        }
        if($sum === $d) {
            $ans++;
        }
    }
    
    
    return $ans;
    
    
    
    
}
