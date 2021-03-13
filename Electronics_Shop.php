<?php
function getMoneySpent($keyboards, $drives, $b) {
    /*
     * Write your code here.
     */
     //var_dump($keyboards);
     usort($keyboards,function($a,$b){
         return $a<=>$b;
     });
     
     usort($drives,function($a,$b){
         return $a<=>$b;
     });
     if($drives[0] + $keyboards[0] > $b) {
         return -1;
     }
     
     $possibleAns = $drives[0] + $keyboards[0];
     
     $kCount = count($keyboards);
     $dCount = count($drives);
     
     for($i=0;$i<$kCount;$i++){
         for($j=0;$j<$dCount;$j++) {
             $val = $keyboards[$i] + $drives[$j];
             if($val <= $b && $val > $possibleAns) {
                 $possibleAns = $val;
             }
         }
     }
     return $possibleAns;

}
