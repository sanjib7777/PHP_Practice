<?php
    session_start();
    if(isset($_SESSION['view'])){
        $_SESSION['view']=$_SESSION['view']+1;
    }
    else{
        $_SESSION['view']=1;
    }
    echo "page view is ".$_SESSION['view'];
?>