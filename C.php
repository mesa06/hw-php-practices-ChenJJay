<?php
    if(isset($_POST["OK"])) {
        $date = $_POST["date"];
        $year = $date[0] * 1000 + $date[1] * 100 + $date[2] * 10 + $date[3];
        $mouth = $date[5] * 10 + $date[6];
        $day = $date[8] * 10 + $date[9];
        $howManyDays = 0;
    
        
        
        switch($mouth) {
            case 1:
                $howManyDays = $day ;
                break;
            case 2:
                $howManyDays = 31 + $day ;
                break;
            case 3:
                $howManyDays = 59 + $day ;
                break;
            case 4:
                $howManyDays = 90 + $day ;
                break;
            case 5:
                $howManyDays = 120 + $day ;
                break;
            case 6:
                $howManyDays = 151 + $day ;
                break;
            case 7:
                $howManyDays = 181 + $day ;
                break;
            case 8:
                $howManyDays = 212 + $day ;
                break;
            case 9:
                $howManyDays = 243 + $day ;
                break;
            case 10:
                $howManyDays = 273 + $day ;
                break;
            case 11:
                $howManyDays = 304 + $day ;
                break;
            case 12:
                $howManyDays = 334 + $day ;
                break;
            default:
                echo "date error!";
        }
        
        
        if($year%4 == 0 && $mouth > 2) {
            if($year%100 == 0 &&  $year%400 != 0){
                //平年
                $howManyDays--;
            }
            //閏年
            $howManyDays++;
            
        }

    }    
?>


<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="">
        請輸入一個日期(yyyy-mm-dd):<input type="text" name="date" id="date" value="">
        <input type="submit" name="OK" id="OK" value="確定">
        
    </form>
    <div >總共:<?php echo $howManyDays; ?>天</div>
</body>
</html>

