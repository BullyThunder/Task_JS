<meta charset="utf-8">
<?php
	$arr = [1,3,4,5,6];
    $numb_arr = (count($arr));
    $summ = 0;
        foreach ($arr as $elem) {
      $summ+=$elem;
    }
    echo $summ/$numb_arr;
?>