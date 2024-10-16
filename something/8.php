<meta charset="utf-8">
<?php
	$arr = [2,5,6];
	if(count($arr) === 3){
        $summ =0;
        foreach($arr as $value){
            $summ += $value;
        }
        echo $summ;
    }
	
?>