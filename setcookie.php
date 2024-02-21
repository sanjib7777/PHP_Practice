<?php
    $value="sanjib";
    $name="user";
    setcookie($name,$value,time()+(66400),"/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_COOKIE[$value])){
        echo "cookie is ".$_COOKIE[$name];
    }
    else{
        echo "isnot set";
    }
   ?>
</body>
</html>