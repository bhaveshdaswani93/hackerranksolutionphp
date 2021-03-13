<?php
function countingValleys($steps, $path) {
    // Write your code here
    // var_dump($path);
    $count = strlen($path);
    $currentPos = 0;
    $up = false;
    $down = false;
    $countValley = 0;
    for($i=0;$i<$count;$i++) {
        if($path[$i] === 'D')
        {
            if($up === false && $down === false && $currentPos === 0) {
                $down = true;
            }
            
            $currentPos += -1; 
        }
        else
        {
            if($up === false && $down === false && $currentPos === 0) {
                $up = true;
            }
            $currentPos += 1; 
        }
        
        if($currentPos === 0) {
            if($up === true) {
                $up = false;
            } else {
                $down = false;
                $countValley++;
            }
        }
        
        
    }
    return $countValley;
    // var_dump(str_split((str_replace(['U','D'],[1,0],$path))));

}
