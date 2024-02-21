<?php
    $fruits = array("apple" => "red", "banana" => "yellow", "grape" => "purple");
    $pair = $each($fruits);
    echo $pair['key'] . ": " . $pair['value'];
    

?>