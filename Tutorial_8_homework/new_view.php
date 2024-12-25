<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New_view</title>
    <link rel="stylesheet" href="new_view.css">
</head>
<body>


    <a href="default.html" id="hyperlink">Add New Contact</a> <br><br>

    <form action="new_view.php" method="post">
        Search Name: &nbsp; <input type="text" name="search">
        <input type="submit" id="submit"> <br><br>
    </form>
    
    <?php
        include("conn.php");

        if (isset($_POST["search"]) == True){
            $name = $_POST["search"];
        }
        else{
            $name = null;
        }

        $result = mysqli_query($con,"SELECT * FROM contacts"); 
        $result2 = mysqli_query($con, "SELECT * FROM contacts WHERE contact_name LIKE '%$name%' ");

        if (isset($name) == True){
            while ($row = mysqli_fetch_array($result2)){
                echo '
                    <div id="customer_background">';

                    echo '<div id="profile_picture">';
                        if ($row["contact_gender"] == "Male"){
                            echo "<img src='http://localhost/tutorial/Tutorial_8_homework/image_of_gender/male.png'>"; 
                        }
                        else{
                            echo "<img src='http://localhost/tutorial/Tutorial_8_homework/image_of_gender/female.png'>"; 
                        }
                    echo '</div> <br><br>';
                        
                    echo '<div class="information">

                                <span id="name" class="info"><b>Name:</b> <br>'.$row["contact_name"].' <br> </span>

                                <span id="phone" class="info"><b>Phone Number:</b> <br>'.$row["contact_phone"].' <br> </span>
                                
                                
                                <span id="email" class="info"><b>Email:</b> <br>'.$row["contact_email"].'  </span> <br>
                                

                                <span id="home" class="info"><b>Home Address:</b> <br>'.$row["contact_address"].' </span> <br>
                                

                                <span id="relation" class="info"><b>Relationship:</b> <br>'.$row["contact_relationship"].' </span> <br>
                                

                                <span id="dob" class="info"><b>Date of Birth:</b> <br>'.$row["contact_dob"].' </span> <br>

                            </div>

                    </div>';
                }
            }

        else{
            while ($row = mysqli_fetch_array($result)){
                echo '
                    <div id="customer_background">';

                    echo '<div id="profile_picture">';
                        if ($row["contact_gender"] == "Male"){
                            echo "<img src='http://localhost/tutorial/Tutorial_8_homework/image_of_gender/male.png'>"; 
                        }
                        else{
                            echo "<img src='http://localhost/tutorial/Tutorial_8_homework/image_of_gender/female.png'>"; 
                        }
                    echo '</div> <br><br>';
                        
                    echo '<div class="information">

                                <span id="name" class="info"><b>Name:</b> <br>'.$row["contact_name"].' <br> </span>

                                <span id="phone" class="info"><b>Phone Number:</b> <br>'.$row["contact_phone"].' <br> </span>
                                
                                
                                <span id="email" class="info"><b>Email:</b> <br>'.$row["contact_email"].'  </span> <br>
                                

                                <span id="home" class="info"><b>Home Address:</b> <br>'.$row["contact_address"].' </span> <br>
                                

                                <span id="relation" class="info"><b>Relationship:</b> <br>'.$row["contact_relationship"].' </span> <br>
                                

                                <span id="dob" class="info"><b>Date of Birth:</b> <br>'.$row["contact_dob"].' </span> <br>

                            </div>

                    </div>';
            }
        }
    
        mysqli_close($con);
    ?>
    
    
</body>
</html>