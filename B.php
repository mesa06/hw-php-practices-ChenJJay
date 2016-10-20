<?php

    $num = 0;
    $numArr[0] = 111;  //預設第一數字為111
    $flag = 0;
    for($i = 1; $i <=4; $i++) {          //百
        for($j = 1; $j <=4; $j++) {      //千
            for($k = 1; $k <=4; $k++) {  //個
                $num = $i * 100 + $j * 10 + $k;
                for($m = 0; $m <count($numArr); $m++){
                    if($num == $numArr[$m]){
                        $flag = 1;       //flag等於1,表示有重複的數字
                    }
                    
                }
                if($flag == 0) {
                    array_push($numArr, $num);
                    }
                else {
                    $flag = 0;
                }
            }
        }
    }
    echo count($numArr);
    /*for($i = 0 ; $i < count($numArr); $i++) {
        echo $numArr[$i] . "<br/>";
    }*/
?>