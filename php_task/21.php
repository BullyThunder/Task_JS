<?php
    $arr =[3,5,6,7,0,34,356];
	for($i=0;$i<=count($arr);$i++){
        if($arr[$i] == 0){
            break;
        }
        echo $arr[$i];
    }
?>