<?php 
    $input=$_POST["input"];
    $temp=$_POST["temp"];
    
    if ($temp == "Fahrenheit"){
        $result = ($input-32) * 5/9 ;
        echo $result, "&nbsp; Celsius"; 
    }
    else if($temp == "Celcius"){
        $result = ($input*9/5) + 32 ;
        echo $result, "&nbsp; Fahrenheit";
    }
?>