<meta charset="utf-8">
<?php
		$arr = [10, 20, 30, 50, 235, 3000];
        foreach ($arr as $elem) {
            if(str_starts_with($elem,1) || str_starts_with($elem,2) || str_starts_with($elem,5)){
                echo $elem . "<br>";
            }
        }
?>