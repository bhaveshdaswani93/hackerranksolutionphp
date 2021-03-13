<?php

function breakingRecords($scores) {
    $count = count($scores);
    
    if($count === 1) {
        return [0,0];
    }
    
    $recordMax = 0;
    $recordMin = 0;
    
    $min = $scores[0];
    $max = $scores[0];
    
    
    
    for($i=1;$i<$count;$i++){
        if($scores[$i] < $min) {
            $min = $scores[$i];
            $recordMin++;
        }
        if($scores[$i] > $max) {
            $max = $scores[$i];
            $recordMax++;
        }
    }
    return [$recordMax,$recordMin];
    
}
