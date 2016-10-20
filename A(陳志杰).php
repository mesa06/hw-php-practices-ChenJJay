<?php 
    
    
    if(isset($_POST["OK"])) {
        $floor = $_POST["layer"];
        $output = "";
        
        for($i = 1; $i <= $floor; $i++) {
            for($j = 0; $j < $floor - $i; $j++) {   // $floor - $i = (2*$floor-1-1) / 2
               $output .= "&nbsp&nbsp";
            }
            for($j = 0; $j < 2 * $i - 1; $j++) {
                $output .= "*";
            }
    
            $output .= "<br />";
        }
    }
    
    
    
    

?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="">
        請輸入星星塔層數:<input type="text" name="layer" id="layer" value="">
        <input type="submit" name="OK" id="OK" value="確定">
        
    </form>
    <div ><?php echo $output; ?></div>
</body>
</html>



 