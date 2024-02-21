<?php
    $array=array(1,6,3,8,2,5,9);
    $array2=array("a","b");
    // array_push($array,2,4);
    // foreach($array as $key=>$value){
    //     echo $value."<br>";
    // }
    // array_pop($array);
    // foreach($array as $key=>$value){
    //     echo $value."<br>";
    // }
    // array_unshift($array,0,100);
    // foreach($array as $key=>$value){
    //     echo $value."<br>";
    // }
    // array_shift($array);
    // foreach($array as $key=>$value){
    //     echo $value."<br>";
    // }
    // $result=array_merge($array,$array2);
    // foreach($result as $key=>$value){
    //     echo $value."<br>";
    // }
    // $b=count($array);
    //     echo $b;
//     $c=array_search("3",$array);
//     echo $c;
        sort($array);
        foreach($array as $key=>$value){
            echo $value."<br>";
        }
?>
