<?php
    $a=183;
    $sum=0;
    $c=str_split($a);
    foreach($c as $value){
        $sum=$sum+$value;
    }
    echo $sum;
?>