<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ADD marks of five subject</h1>
    <?php
    $total=0;
        $sub=array("math"=>"100","pqt"=>"98","dsa"=>"97","LC"=>"96","ECI"=>"95");
        foreach($sub as $key=>$value){
            $total=$total + $value;
        }
        echo "total is $total";
    ?>
</body>
</html>