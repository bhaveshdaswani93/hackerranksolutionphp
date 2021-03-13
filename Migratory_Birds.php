<?php
function migratoryBirds($arr) {
    //print_r($arr);
    usort($arr,function($a,$b){
       return $a<=>$b; 
    });
    //print_r($arr);
    $ans = $arr[0];
    $count = count($arr);
    $repCount = 1;
    $nextCount = null;
    
    for($i=1;$i<$count;$i++){
        if($arr[$i] === $arr[$i - 1] && $arr[$i] === $ans){
            $repCount++;
        } else if ($arr[$i] === $arr[$i - 1] && $arr[$i] !== $ans) {
            if(empty($nextCount)) {
                // echo $arr[$i]."\n";
                // echo "called";
                $nextCount = 1;
            } else {
                $nextCount++;
            }
        } else if ($arr[$i] !== $arr[$i - 1]) {
        //   echo $i."\n";
           //var_dump( $nextCount)."\n";
         //  echo $repCount."\n\n";
            if($nextCount > $repCount) {
            //      echo "ans\n";
            //    echo $arr[$i]."\n";
            //     echo "ans fin";
                $ans = $arr[$i-1];
                $repCount = $nextCount;
                $nextCount = 1;
            } else {
                // echo $arr[$i]."\n";
                //echo "reset";
                $nextCount = 1;
            }
        }
    }
    
    if($nextCount > $repCount) {
        $ans = $arr[$count-1];
    }
    
    return $ans;

}
