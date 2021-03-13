<?php
function getTotalX($a, $b) {
    // Write your code here
    usort($a,function($x,$y){
       return $x <=> $y; 
    });
    usort($b,function($x,$y){
       return $x <=> $y; 
    });
    
    $min = $a[count($a)-1];
    $max = $b[0];
    
    $ans = 0;
    for($i=$min;$i<=$max;$i++)
    {
        $toConsider = true;
        for($j=0;$j<count($a);$j++){
            if($i%$a[$j] !== 0  ){
                $toConsider = false;
                break;
            }
        }
        
        for($k=0;$k<count($b);$k++){
            if($b[$k]%$i !== 0) {
                $toConsider = false;
                break;
            }
        }
        
        if($toConsider){
           $ans++; 
        }
        
    }
    return $ans;

}
