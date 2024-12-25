<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 6 Question 1</title>
</head>
<body>

    <?php
        $title = "Contact Information";
        $name = "John Doe";
        $email = "john@apu.edu.my";
        $address[0] = "Lot 6 Technology Park Malaysia";
        $address[1] = "Bukit Jalil";
        $address[2] = "Kuala Lumpur";
        $postcode = "57000";
        $telephone = "0389961000"; 

        for ($x=0; $x<3; $x+=1){
            echo $address[$x] , "<br>";
        }
    ?>

    



</body>
</html>