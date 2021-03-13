<?php

// Complete the bonAppetit function below.
function bonAppetit($bill, $k, $b) {

    unset($bill[$k]);
    $sum = array_sum($bill);
    $toPay = round($sum/2);
    if($toPay == $b) {
        echo "Bon Appetit";
    } else {
        echo $b - $toPay;
    }
    

}
