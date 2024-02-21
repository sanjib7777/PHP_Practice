<?php
    $list=[2,6,10,8,4,7];
    $lang=["PHP","JS","C","CPP"];
    $days=["Mon"=>2,"Tue"=>3,"Wed"=>4,"Thu"=>5];
    $index=array_search(8,$list);
    unset($list[$index]);
    print_r($list);
    $lastelement=end($lang);
    echo $lastelement;
    foreach($days as $key=>$value){
        echo "<br>".$value."<br>";
        echo "<br>".$key."<br>";
    }
    sort($list);
    print_r($list);
    if(in_array(200 ,$list)){
        echo "found";
    }
    else{
        echo "not found";
    }
?>