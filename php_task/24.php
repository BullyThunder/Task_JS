<?php
    $arr = [];
    for($i=0;$i<=100;$i++){
        if($i %2 != 0){
        array_push($arr,$i);
        }
    }
    var_dump($arr) ;
?>