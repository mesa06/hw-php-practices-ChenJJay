<?php
    if(isset($_POST["OK"])) {
        $sentence = $_POST["sentence"];
        $str[] ="";
        $strTimes[] = "";
        $testString = "";
        $index = 0;
        
    
        
        $str[$index] = substr($sentence, 0, 1);      //取出第一個字元放入$str[]中
        $strTimes[$index] = 1;
        
        for($i = 1; $i < strlen($sentence); $i++) {  //依序取出字元
            $testString = substr($sentence, $i, 1);
            $flag = 0;
            
            for($j = 0; $j < count($str); $j++){     //判斷是否與$str[]有所重複
                if($testString == $str[$j]) {       //有則所對應的$strTimes[]+1
                     $strTimes[$j]++;
                     $flag = 1;
                    
                }
            }
            if($flag == 0){                      //無則加到$str[]
               array_push($str,$testString);        
               array_push( $strTimes, 1);
               $index ++;
            }
            
        }
        
        for($i = 0; $i < $index + 1; $i++) {
            if($str[$i] != " "){
                $output .= $str[$i] . ": " . $strTimes[$i] . "<br />";
            }
        }
    }  

    
?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="">
        請輸入一個句子:<input type="text" name="sentence" id="sentence" value="">
        <input type="submit" name="OK" id="OK" value="確定">
    </form>
    <div ><?php echo $output; ?></div>
</body>
</html>