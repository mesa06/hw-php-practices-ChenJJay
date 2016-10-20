<?php 
    for($i = 100; $i <= 999; $i++) {
        $num = sprintf("%d", $i);
        if( $num == $num[0] * $num[0] * $num[0] + $num[1] * $num[1] * $num[1] + $num[2] * $num[2] * $num[2]) {
            echo $num, "<br />";
        }
       
    }
?>