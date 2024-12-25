<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T6Q3</title>
</head>
<body>
    <style>
        body{
            background-image: url("<?php changebg() ?>");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        p{
            font-size: 50px;
            text-align: center;
            line-height: 600px;
            font-weight: 1000px;
            color:black;
        }
    </style>

    <?php                      
        date_default_timezone_set("Asia/Kuala_Lumpur");
        $hour= date('H');

        if ($hour >= 06 && $hour < 12 ){
            echo "<p> Current Hour: &nbsp;", $hour, "&nbsp; hour </p>";
            echo "<p> Good Morning </p>";
        }
        else if ($hour >= 12 && $hour <= 18 ){
            echo "<p> Current Hour: &nbsp;", $hour, "&nbsp; hour </p>";
            echo "<p> Good Afternoon </p>";
        } 
        else{
            echo "<p> Current Hour: &nbsp;", $hour, "&nbsp; hour </p>";
            echo "<p> Good Night </p>";
        
        }

        function changebg(){
            date_default_timezone_set("Asia/Kuala_Lumpur");
            $hour= date('H');

            if ($hour >= 06 && $hour < 12 ){
                echo "http://localhost/tutorial/tutorial 6/images/morning.jpg";
            }
            else if ($hour >= 12 && $hour <= 18 ){
                echo "http://localhost/tutorial/tutorial 6/images/afternoon.jpg";
            } 
            else{
                echo "http://localhost/tutorial/tutorial 6/images/night.jpg";
            }
        }
    ?>

</body>
</html>