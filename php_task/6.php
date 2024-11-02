<meta charset="utf-8">
<?php
	$test = 36;
	
	if($test<=0 || $test>=31){
        echo "Ошибка";
    }
    elseif($test>=1 && $test<=10){
        echo "1 декада";
    }
    elseif($test>=11 && $test<=20){
        echo "2 декада";
    }
    elseif($test>=21 && $test<=30){
        echo "3 декада";
    };
?>