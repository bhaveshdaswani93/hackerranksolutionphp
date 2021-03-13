<?php
function pageCount($n, $p) {
    /*
     * Write your code here.
     */
     if($p == 1) {
         return 0;
     }
     
     if($p == $n || ( $n%2 != 0 && $p+1 == $n )) {
         return 0;
     }
     
     if($p%2 === 0 && $p < $n) {
         $p = $p+1;
     }
     //echo $p;
     if($p - 1 < $n - $p)
     {
         //we will start from 1
         return ceil(($p - 1)/2);
     } else {
         // we will start from end
         return ceil(($n-$p)/2);
     }

}
