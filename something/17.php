<meta charset="utf-8">
<?php
		$arr = ["пон","вт","ср","чт","пт","сб","вск", ];
        $today = 5;
        foreach ($arr as $index => $elem) {
            if($index === $today){
            echo "<i>" . $elem . "</i>" . "<br>";
            }
            else{
                echo $elem . "<br>";
            }
        }
?>