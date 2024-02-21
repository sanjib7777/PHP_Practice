<?php
        $a=$_GET['n1'];
        
        for($i=1;$i<=$a;$i++){
            $flag=0;
            for($j=1;$j<=$i;$j++){
                if($i%$j==0){
                    $flag=$flag+1;
                }
            }
            if($flag==2){
                echo $i."<br>";
            }
        }
?>